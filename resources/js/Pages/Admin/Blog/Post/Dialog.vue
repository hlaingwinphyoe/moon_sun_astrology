<template>
    <el-dialog
        :modelValue="show"
        @update:modelValue="show = $event"
        @close="closeDialog(formRef)"
        @open="openDialog"
        draggable
        :title="dialogTitle"
        :close-on-click-modal="false"
    >
        <el-form
            label-width="120px"
            ref="formRef"
            :model="form"
            label-position="top"
        >
            <el-form-item label="Poster Photo" size="large">
                <div
                    class="upload-card h-60 w-full object-cover"
                    @click="selectImage"
                >
                    <img
                        v-show="imgSrc"
                        id="preview_img"
                        class="w-full h-auto object-cover"
                        :src="imgSrc"
                    />
                    <h4 v-show="!imgSrc">Upload Poster (1200 x 630px)</h4>

                    <input
                        type="file"
                        class="hidden"
                        name="image"
                        id="upload"
                        @change="loadFile"
                        accept="image/*"
                    />
                </div>
                <InputError class="mt-2" :message="$page.props.errors.poster" />
            </el-form-item>
            <div class="grid grid-cols-2 gap-4">
                <el-form-item
                    label="Title"
                    prop="title"
                    :rules="[
                        {
                            required: true,
                            message: 'Title is required',
                            trigger: 'blur',
                        },
                    ]"
                >
                    <el-input v-model="form.title" />
                    <InputError
                        class="mt-2"
                        :message="$page.props.errors.name"
                    />
                </el-form-item>
                <el-form-item
                    label="Category"
                    :rules="[
                        {
                            required: true,
                            message: 'Category is required',
                            trigger: 'blur',
                        },
                    ]"
                >
                    <el-select
                        v-model="form.category"
                        placeholder="Select"
                        filterable
                    >
                        <el-option
                            v-for="item in categories"
                            :key="item.slug"
                            :label="item.name"
                            :value="item.id"
                        />
                    </el-select>
                    <InputError
                        class="mt-2"
                        :message="$page.props.errors.category"
                    />
                </el-form-item>
            </div>
            <div>
                <p class="mb-1.5">Description</p>
                <MyEditor v-model="form.desc" />
                <InputError class="mt-2" :message="$page.props.errors.desc" />
            </div>
        </el-form>
        <template #footer>
            <div class="dialog-footer mt-4">
                <el-button @click="closeDialog(formRef)">Cancel</el-button>
                <el-button
                    type="primary"
                    @click="submitDialog(formRef)"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Save
                </el-button>
            </div>
        </template>
    </el-dialog>
</template>

<script>
import { reactive, ref, toRefs } from "vue";
import { ElMessage } from "element-plus";
import InputError from "@/Components/InputError.vue";
import MyEditor from "@/Components/MyEditor.vue";
import { router } from '@inertiajs/vue3';
export default {
    props: ["show", "title", "data", "categories"],
    components: {
        InputError,
        MyEditor,
    },
    emits: ["closed"],
    setup(props, context) {
        const state = reactive({
            dialogTitle: "",
            imgSrc: props.data ? props.data.poster : "",
            virtualForm: new FormData(),
            form: {
                title: "",
                category: "",
                desc: "",
            },
        });

        const formRef = ref();

        const submitDialog = (formRef) => {
            formRef.validate((valid) => {
                if (valid) {
                    state.virtualForm.append("title", state.form.title);
                    state.virtualForm.append("category", state.form.category);
                    state.virtualForm.append("desc", state.form.desc);
                    if (state.dialogTitle === "Create") {
                        router.post(
                            route("admin.posts.store"),
                            state.virtualForm,
                            {
                                onSuccess: (page) => {
                                    ElMessage.success(page.props.flash.success);
                                    closeDialog(formRef);
                                },
                                onError: () => {
                                    state.isLoading = false;
                                    formRef.resetFields();
                                },
                            }
                        );
                    } else {
                        state.virtualForm.append("_method", "patch");
                        router.post(
                            route("admin.posts.update", props.data.id),
                            state.virtualForm,
                            {
                                onSuccess: (page) => {
                                    ElMessage.success(page.props.flash.success);
                                    closeDialog(formRef);
                                },
                                onError: (page) => {
                                    state.isLoading = false;
                                    formRef.resetFields();
                                    ElMessage.error(page.error);
                                },
                            }
                        );
                    }
                }
            });
        };

        const closeDialog = (formRef) => {
            formRef.resetFields();
            context.emit("closed");
        };

        const openDialog = () => {
            state.dialogTitle = props.title;
            state.form.title = props.data.title ?? "";
            state.form.category = props.data.category_id ?? "";
            state.imgSrc = props.data.poster ?? "";
            state.form.desc = props.data.desc ?? "";
            console.log(props.data.desc);
        };

        // upload Image
        const selectImage = () => {
            var upload = document.getElementById("upload");
            upload.click();
        };

        const loadFile = (event) => {
            var input = event.target;
            var file = input.files[0];

            state.imgSrc = URL.createObjectURL(file);

            state.virtualForm.append("poster", file);

            var output = document.getElementById("preview_img");
            output.src = URL.createObjectURL(file);
            output.onload = function () {
                URL.revokeObjectURL(output.src); // free memory
            };
        };

        return {
            ...toRefs(state),
            openDialog,
            formRef,
            closeDialog,
            submitDialog,
            selectImage,
            loadFile,
        };
    },
};
</script>

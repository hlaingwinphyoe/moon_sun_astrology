<template>
    <el-dialog
        :modelValue="show"
        @update:modelValue="show = $event"
        @close="closeDialog(formRef)"
        @open="openDialog"
        draggable
        :title="dialogTitle"
        :close-on-click-modal="false"
        width="500"
    >
        <el-form label-width="120px" ref="formRef" :model="form">
            <el-form-item
                label="Name"
                prop="name"
                :rules="[
                    {
                        required: true,
                        message: 'Name is required',
                        trigger: 'blur',
                    },
                ]"
            >
                <el-input v-model="form.name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </el-form-item>
            <el-form-item
                label="Price"
                prop="price"
                :rules="[
                    {
                        required: true,
                        message: 'Price is required',
                        trigger: 'blur',
                    },
                ]"
            >
                <el-input type="number" min="0" v-model="form.price" />
                <InputError class="mt-2" :message="form.errors.price" />
            </el-form-item>
            <el-form-item
                label="Astrologer"
                prop="astrologer"
                :rules="[
                    {
                        required: true,
                        message: 'Astrologer is required',
                        trigger: 'blur',
                    },
                ]"
            >
                <el-select
                    v-model="form.astrologer"
                    placeholder="Select"
                    clearable
                    @clear="form.astrologer = ''"
                >
                    <el-option
                        v-for="item in astrologers"
                        :key="item.id"
                        :label="item.name"
                        :value="item.id"
                    />
                </el-select>
            </el-form-item>
        </el-form>
        <template #footer>
            <div class="dialog-footer">
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
import { useForm } from "@inertiajs/vue3";
import { ElMessage } from "element-plus";
import InputError from "@/Components/InputError.vue";
export default {
    props: ["show", "title", "data", "astrologers"],
    components: {
        InputError,
    },
    emits: ["closed"],
    setup(props, context) {
        const state = reactive({
            dialogTitle: "",
        });

        const formRef = ref();

        const form = useForm({
            name: "",
            price: "",
            astrologer: "",
        });

        const submitDialog = (formRef) => {
            formRef.validate((valid) => {
                if (valid) {
                    if (state.dialogTitle === "Create") {
                        form.post(route("admin.packages.store"), {
                            onSuccess: (page) => {
                                closeDialog(formRef);
                                ElMessage.success(page.props.flash.success);
                            },
                        });
                    } else {
                        form.patch(
                            route("admin.packages.update", props.data.id),
                            {
                                onSuccess: (page) => {
                                    closeDialog(formRef);
                                    ElMessage.success(page.props.flash.success);
                                },
                            }
                        );
                    }
                }
            });
        };

        const closeDialog = (formRef) => {
            form.reset();
            form.clearErrors();
            formRef.resetFields();
            context.emit("closed");
        };

        const openDialog = () => {
            state.dialogTitle = props.title;
            form.name = props.data.name ?? "";
            form.price = props.data.price ?? "";
            form.astrologer = props.data.astrologer_id ?? "";
        };

        return {
            ...toRefs(state),
            openDialog,
            formRef,
            closeDialog,
            submitDialog,
            form,
        };
    },
};
</script>

<style></style>

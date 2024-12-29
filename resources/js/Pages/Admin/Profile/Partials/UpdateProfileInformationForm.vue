<script setup>
import InputError from "@/Components/InputError.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { ElMessage } from "element-plus";
import { ref } from "vue";

const user = usePage().props.auth.user;

const formRef = ref();

const form = useForm({
  name: user.name,
  phone: user.phone,
  email: user.email,
});

const handleSubmit = (formRef) => {
  formRef.validate((valid) => {
    if (valid) {
      form.patch(route("admin.profile.update"), {
        onSuccess: (page) => {
          formRef.resetFields();
          ElMessage.success(page.props.flash.success);
        },
      });
    }
  });
};
</script>

<template>
  <section>
    <header class="mb-4">
      <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>

      <p class="mt-1 text-sm text-gray-600">
        Update your account's profile information and phone address.
      </p>
    </header>

    <el-form
      label-width="120px"
      ref="formRef"
      :model="form"
      label-position="top"
    >
      <el-form-item
        label="Name"
        prop="name"
        size="large"
        :rules="[
          {
            required: true,
            message: 'Name is required',
            trigger: 'blur',
          },
        ]"
      >
        <el-input v-model="form.name" placeholder="" />
        <InputError class="mt-2" :message="form.errors.name" />
      </el-form-item>
      <el-form-item
        label="Phone"
        prop="phone"
        size="large"
        :rules="[
          {
            required: true,
            message: 'Phone is required',
            trigger: 'blur',
          },
        ]"
      >
        <el-input v-model="form.phone" placeholder="" />
        <InputError class="mt-2" :message="form.errors.phone" />
      </el-form-item>
      <el-form-item label="Email" prop="email" size="large">
        <el-input v-model="form.email" placeholder="Email" type="email" />
        <InputError class="mt-2" :message="form.errors.email" />
      </el-form-item>

      <el-button
        type="primary"
        @click="handleSubmit(formRef)"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Save
      </el-button>
    </el-form>
  </section>
</template>

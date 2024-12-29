<script setup>
import InputError from "@/Components/InputError.vue";
import { useForm } from "@inertiajs/vue3";
import { ElMessage } from "element-plus";
import { ref } from "vue";

const formRef = ref();

const form = useForm({
  current_password: "",
  password: "",
  password_confirmation: "",
});

const updatePassword = (formRef) => {
  formRef.validate((valid) => {
    if (valid) {
      form.patch(route("password.update"), {
        preserveScroll: true,
        onSuccess: (page) => {
          form.reset();
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
      <h2 class="text-lg font-medium text-gray-900">Update Password</h2>

      <p class="mt-1 text-sm text-gray-600">
        Ensure your account is using a long, random password to stay secure.
      </p>
    </header>

    <el-form
      label-width="120px"
      ref="formRef"
      :model="form"
      label-position="top"
    >
      <el-form-item
        label="Current Password"
        prop="current_password"
        size="large"
        :rules="[
          {
            required: true,
            message: 'Current Password is required',
            trigger: 'blur',
          },
        ]"
      >
        <el-input
          type="password"
          show-password
          v-model="form.current_password"
          placeholder=""
        />

        <InputError :message="form.errors.current_password" class="mt-2" />
      </el-form-item>

      <el-form-item
        label="Password"
        prop="password"
        size="large"
        :rules="[
          {
            required: true,
            message: 'Password is required',
            trigger: 'blur',
          },
        ]"
      >
        <el-input
          type="password"
          show-password
          v-model="form.password"
          placeholder=""
        />

        <InputError :message="form.errors.password" class="mt-2" />
      </el-form-item>

      <el-form-item
        label="Password Confirmation"
        prop="password_confirmation"
        size="large"
        :rules="[
          {
            required: true,
            message: 'Password Confirmation is required',
            trigger: 'blur',
          },
        ]"
      >
        <el-input
          type="password"
          show-password
          v-model="form.password_confirmation"
          placeholder=""
        />

        <InputError :message="form.errors.password_confirmation" class="mt-2" />
      </el-form-item>

      <div class="flex items-center gap-4">
        <el-button
          type="primary"
          @click="updatePassword(formRef)"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Save
        </el-button>
      </div>
    </el-form>
  </section>
</template>

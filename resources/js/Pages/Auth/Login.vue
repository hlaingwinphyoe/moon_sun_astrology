<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

defineProps({
  canResetPassword: Boolean,
  status: String,
});

const form = useForm({
  name: "",
  password: "",
  remember: false,
});

const submit = () => {
  console.log("heo");
  form
    .transform((data) => ({
      ...data,
      remember: form.remember ? "on" : "",
    }))
    .post(route("login"), {
      onFinish: () => form.reset("password"),
    });
};
</script>

<template>
  <Head title="Log in" />

  <div class="container mx-auto">
    <a :href="route('welcome')">
      <img src="/Full_Black.png" class="w-auto h-16 absolute top-5" alt="" />
    </a>
    <div
      class="min-h-screen p-8 items-center grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8"
    >
      <div>
        <h4
          class="font-medium border border-black rounded-full uppercase px-8 text-sm py-2 w-fit mb-4"
        >
          Get In Touch
        </h4>
        <h4 class="text-5xl font-bold tracking-wide mb-4">
          <p class="mb-3">Let's get in</p>
          <p>touch with us.</p>
        </h4>
        <p class="text-gray-500 text-base tracking-wide mb-5">
          If you would like to work with us or just want to get in touch, we’d
          love to hear from you!
        </p>
        <p class="text-3xl font-bold tracking-wide mb-4">06-6085-7579</p>
        <ul class="flex gap-4 md:gap-8">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Tiktok</a></li>
        </ul>
      </div>
      <div>
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
              v-model="form.password"
              placeholder=""
              show-password
            />
            <InputError class="mt-2" :message="form.errors.password" />
          </el-form-item>

          <el-checkbox
            v-model="form.remember"
            label="Remember Me"
            size="large"
          />

          <div class="flex gap-6 items-center mt-4">
            <el-button
              type="primary"
              class="!text-black"
              size="large"
              @click="submit"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Log in
            </el-button>
            <Link :href="route('register')" class="underline underline-offset-1"
              >Don't have an account? Sign Up Now!</Link
            >
          </div>
        </el-form>
      </div>
    </div>
  </div>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import UpdatePasswordForm from "./Partials/UpdatePasswordForm.vue";
import UpdateProfileInformationForm from "./Partials/UpdateProfileInformationForm.vue";

defineProps({
  status: {
    type: String,
  },
});
</script>

<template>
  <Head title="Profile" />

  <AuthenticatedLayout>
    <div class="p-4 container mx-auto overflow-x-auto">
      <div class="flex items-start justify-between gap-4">
        <div class="p-6 bg-white shadow sm:rounded w-full">
          <UpdateProfileInformationForm />
        </div>

        <div class="p-6 bg-white shadow sm:rounded w-full">
          <UpdatePasswordForm />
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

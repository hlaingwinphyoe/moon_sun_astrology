<template>
  <header class="container mx-auto flex justify-between items-center p-3.5">
    <el-button @click="showSidebar" text bg type="primary">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="22"
        height="22"
        viewBox="0 0 24 24"
      >
        <g
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-width="1.5"
        >
          <path d="M20 7H4" />
          <path d="M15 12H4" opacity=".7" />
          <path d="M9 17H4" opacity=".4" />
        </g>
      </svg>
    </el-button>
    <div class="flex items-center">
      <el-dropdown trigger="click">
        <div class="relative mr-6 flex items-center">
          <el-icon style="font-size: 1.2rem; color: rgb(96, 98, 102)"
            ><BellFilled
          /></el-icon>
          <div
            v-show="noti_count != 0"
            class="absolute inline-flex items-center justify-center w-6 h-6 text-[9px] bg-red-500 border-2 border-white rounded-full -top-3.5 left-2 text-white"
          >
            {{ noti_count > 9 ? "9+" : noti_count }}
          </div>
        </div>
        <template #dropdown>
          <el-dropdown-menu class="!py-0">
            <el-dropdown-item
              disabled
              class="flex-col border-b border-gray-200 !py-3 justify-center bg-gray-100 !text-gray-600 font-bold"
            >
              Notifications
              <Link
                class="text-blue-500"
                :href="route('admin.notifications.lists')"
              >
                See All
              </Link>
            </el-dropdown-item>
            <template v-if="notifications.length">
              <el-dropdown-item
                v-for="notification in notifications"
                :key="notification.id"
                :value="notification.id"
                @click="onOpen(notification.id)"
                class="flex-col text-left !items-start border-b border-gray-200 !py-2"
              >
                <div class="flex items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill="currentColor"
                      fill-rule="evenodd"
                      d="M10.46 1.25h3.08c1.603 0 2.86 0 3.864.095c1.023.098 1.861.3 2.6.752a5.75 5.75 0 0 1 1.899 1.899c.452.738.654 1.577.752 2.6c.095 1.004.095 2.261.095 3.865v1.067c0 1.141 0 2.036-.05 2.759c-.05.735-.153 1.347-.388 1.913a5.75 5.75 0 0 1-3.112 3.112c-.805.334-1.721.408-2.977.43a10.81 10.81 0 0 0-.929.036c-.198.022-.275.054-.32.08c-.047.028-.112.078-.224.232c-.121.166-.258.396-.476.764l-.542.916c-.773 1.307-2.69 1.307-3.464 0l-.542-.916a10.605 10.605 0 0 0-.476-.764c-.112-.154-.177-.204-.224-.232c-.045-.026-.122-.058-.32-.08c-.212-.023-.49-.03-.93-.037c-1.255-.021-2.171-.095-2.976-.429A5.75 5.75 0 0 1 1.688 16.2c-.235-.566-.338-1.178-.389-1.913c-.049-.723-.049-1.618-.049-2.76v-1.066c0-1.604 0-2.86.095-3.865c.098-1.023.3-1.862.752-2.6a5.75 5.75 0 0 1 1.899-1.899c.738-.452 1.577-.654 2.6-.752C7.6 1.25 8.857 1.25 10.461 1.25M6.739 2.839c-.914.087-1.495.253-1.959.537A4.25 4.25 0 0 0 3.376 4.78c-.284.464-.45 1.045-.537 1.96c-.088.924-.089 2.11-.089 3.761v1c0 1.175 0 2.019.046 2.685c.045.659.131 1.089.278 1.441a4.25 4.25 0 0 0 2.3 2.3c.515.214 1.173.294 2.429.316h.031c.398.007.747.013 1.037.045c.311.035.616.104.909.274c.29.17.5.395.682.645c.169.232.342.525.538.856l.559.944a.52.52 0 0 0 .882 0l.559-.944c.196-.331.37-.624.538-.856c.182-.25.392-.476.682-.645c.293-.17.598-.24.909-.274c.29-.032.639-.038 1.037-.045h.032c1.255-.022 1.913-.102 2.428-.316a4.25 4.25 0 0 0 2.3-2.3c.147-.352.233-.782.278-1.441c.046-.666.046-1.51.046-2.685v-1c0-1.651 0-2.837-.089-3.762c-.087-.914-.253-1.495-.537-1.959a4.25 4.25 0 0 0-1.403-1.403c-.464-.284-1.045-.45-1.96-.537c-.924-.088-2.11-.089-3.761-.089h-3c-1.651 0-2.837 0-3.762.089M7.25 9A.75.75 0 0 1 8 8.25h8a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 9m0 3.5a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="pl-1" :value="notification.id">
                    {{ notification.data.body }}
                  </span>
                </div>
                <span class="text-blue-600 text-xs">
                  {{ createdDate(notification.created_at) }}
                </span>
              </el-dropdown-item>
            </template>
            <el-dropdown-item
              v-else
              disabled
              class="text-center border-b border-gray-200 !py-2"
            >
              <span class="pl-1"> No New Notifications </span>
            </el-dropdown-item>
            <el-dropdown-item
              :disabled="noti_count == 0"
              class="border-t border-gray-200 !py-3 justify-center bg-gray-100 !text-gray-900 font-black"
            >
              <el-button
                plain
                link
                class="flex items-center gap-2"
                @click="readAll"
                :disabled="noti_count == 0"
              >
                All Marks As Read
              </el-button>
            </el-dropdown-item>
          </el-dropdown-menu>
        </template>
      </el-dropdown>

      <el-dropdown class="mr-3">
        <el-button text bg>
          <el-icon size="large"><UserFilled /></el-icon>
          <span>{{ user.name }}</span>
        </el-button>
        <template #dropdown>
          <el-dropdown-menu>
            <el-dropdown-item>
              <a
                class="flex items-center gap-2"
                :href="route('welcome')"
                target="_blank"
              >
                <el-icon><HomeFilled /></el-icon>
                <span>Main Home</span>
              </a>
            </el-dropdown-item>
            <el-dropdown-item>
              <Link
                class="flex items-center gap-2"
                :href="route('admin.profile.edit')"
              >
                <el-icon><Tools /></el-icon>
                <span>Profile</span>
              </Link>
            </el-dropdown-item>
            <el-dropdown-item divided>
              <Link
                class="flex items-center gap-2 text-red-500"
                :href="route('logout')"
                method="post"
                as="button"
              >
                <el-icon><SwitchButton /></el-icon>
                <span>Log Out</span>
              </Link>
            </el-dropdown-item>
          </el-dropdown-menu>
        </template>
      </el-dropdown>
    </div>
  </header>
</template>

<script>
import {
  UserFilled,
  Tools,
  SwitchButton,
  BellFilled,
  HomeFilled,
} from "@element-plus/icons-vue";
import { usePage } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";
import moment from "moment";

export default {
  components: {
    UserFilled,
    Tools,
    SwitchButton,
    BellFilled,
    HomeFilled
  },
  emits: ["show-event"],
  setup(props, { emit }) {
    const user = usePage().props.auth.user;
    const notifications = usePage().props.notifications;
    const noti_count = usePage().props.noti_count;
    const current_route = usePage().props.current_route;

    const form = useForm({
      route: current_route,
    });

    const showSidebar = () => {
      emit("show-event");
    };

    const createdDate = (date) => {
      return moment(date).format("DD-MMMM-YYYY");
    };

    const onOpen = (id) => {
      console.log(id);
      form.patch(route("admin.mark-as-read", id), {
        preserveScroll: true,
      });
    };

    const readAll = () => {
      form.delete(route("admin.readallnotifications"), {
        preserveScroll: true,
      });
    };

    return {
      showSidebar,
      user,
      noti_count,
      notifications,
      readAll,
      onOpen,
      createdDate,
    };
  },
};
</script>

<style></style>

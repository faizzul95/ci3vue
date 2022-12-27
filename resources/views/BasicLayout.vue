<template>
  <div class="basic-layout container">
    <div class="nav-wrap">
      <div class="nav-header">
        <h2 class="title">Basic Layout</h2>
      </div>
      <ul class="nav-left">
        <div class="w-100" v-for="(menuList, i) in menus" v-bind:key="i">
          <li
            v-if="menuList.heading != ''"
            class="menu-header small text-uppercase"
          >
            <span class="menu-header-text">{{ menuList.heading }}</span>
          </li>

          <li
            class="menu-item"
            :class="[{ active: menu.title == route.meta.title }]"
            v-for="(menu, index) in menuList.menu"
            v-bind:key="index"
          >
            <router-link
              v-if="menu.submenu.length == 0"
              :to="menu.router_name"
              :class="menu.class"
            >
              <i :class="menu.icon"></i>
              <div data-i18n="{{ menu.title }}">{{ menu.title }}</div>
            </router-link>
          </li>
        </div>
      </ul>
    </div>
    <!-- Here the page content -->
    <div class="content-wrap">
      <div class="content-header"></div>
      <div class="content">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
import navItems from "@/views/navigation/sidebar";
import { useRoute } from "vue-router";
import { ref, reactive, computed } from "vue";

export default {
  setup() {
    const route = useRoute();
    return {
      route,
    };
  },

  props: {
    menus: {
      type: Object,
      default() {
        return navItems;
      },
    },
  },

  mounted() {},

  watch: {
    $route(to, from) {
      document.title = to.meta.title;
    },
  },
};
</script>

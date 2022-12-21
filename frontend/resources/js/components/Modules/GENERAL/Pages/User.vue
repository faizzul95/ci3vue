<template>
  <h1 class="title">Example Funtion</h1>
  <button class="btn btn-xs btn-info float-end me-2" @click="addForm">
    <vue-feather type="plus"></vue-feather> Add User
  </button>

  <button class="btn btn-xs btn-info float-end me-2" @click="getUser">
    <vue-feather type="plus"></vue-feather> Call User
  </button>

  <slideout
    dock="right"
    v-model="modalVisible"
    size="800px"
    :close-on-mask-click="true"
    :arrow-button="true"
    :title="modalTitle"
  >
    <!-- <Suspense> -->
    <!-- <component
        v-if="modalVisible"
        v-bind:is="roleForm"
        @save="save"
      ></component> -->
    <!-- </Suspense> -->
  </slideout>
</template>

<script setup>
import { ref, shallowRef, reactive, defineAsyncComponent } from "vue";
import VueFeather from "vue-feather";
import { callApi } from "components/helpers/apiWrapper";
// import { useRoleStore } from "@/stores/role";

const modalVisible = ref(false);
const modalTitle = ref("");

const getUser = async (id = null) => {
  const { res, error } = await callApi("get", "api/v1/users", 1);
  console.log(res);
};

const addForm = (id = null) => {
  modalVisible.value = true;
  modalTitle.value = id ? "Add User" : "Update User";
};

// const submit = async (id) => {
//   const data = roleStore.role;
//   data.id = id;
//   const { res } = await roleStore.fetch(data);

//   if (res.value.status == 200) {
//     emit("add", id);
//   }
// };
</script>

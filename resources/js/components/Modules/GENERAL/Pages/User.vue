<template>
  <h1 class="title">Example Function</h1>
  <button
    v-if="$can('add-user')"
    class="btn btn-xs btn-info float-end me-2"
    @click="addForm"
  >
    <vue-feather type="plus"></vue-feather> Add User
  </button>

  <button class="btn btn-xs btn-info float-end me-2" @click="getUser">
    <vue-feather type="plus"></vue-feather> Call User
  </button>

  <div class="row mt-2">
    <div
      class="
        col-xl-12 col-lg-12 col-md-12 col-sm-12
        layout-spacing
        align-self-center
      "
    >
      <!-- <TableWrapper
        ref="datatable"
        :columns="table.columns"
        :url="table.url"
        @editForm="editForm"
        @deleteData="deleteData"
      >
      </TableWrapper> -->
    </div>
  </div>

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
import { callApi, retrieve, isSuccess } from "helpers/common";
// import VueFeather from "vue-feather";
// import { useRoleStore } from "@/stores/role";

const modalVisible = ref(false);
const modalTitle = ref("");
const datatable = ref(null);

// const table = reactive({
//   url: "user/list",
//   columns: [
//     {
//       label: "#",
//       field: "count",
//       width: "2%",
//       sortable: true,
//       isKey: true,
//     },
//     {
//       label: "Name",
//       field: "user_full_name",
//       width: "78%",
//       sortable: true,
//     },
//     {
//       label: "Status",
//       field: "user_status",
//       width: "10%",
//       sortable: true,
//       display: function (row) {
//         var status =
//           row.user_status == 1
//             ? '<span class="badge badge-label bg-success"> Active </span>'
//             : '<span class="badge badge-label bg-danger"> In Active </span>';
//         return "<center>" + status + "</center>";
//       },
//     },
//     {
//       label: "Action",
//       field: "action",
//       width: "10%",
//       sortable: false,
//     },
//   ],
// });

const getUser = async (id = "") => {
  const { res, error } = await callApi("get", "user", 1);
  if (isSuccess(res)) {
    console.log(retrieve(res));
  } else {
    console.log(res, error);
  }
};

const addForm = (id = null) => {
  modalVisible.value = true;
  modalTitle.value = id ? "Add User" : "Update User";
};
</script>

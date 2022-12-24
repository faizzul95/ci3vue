<template>
  <VueTableLite
    v-if="table.rows.length > 0"
    :is-slot-mode="true"
    :is-loading="table.isLoading"
    :columns="table.columns"
    :rows="table.rows"
    :total="table.totalRecordCount"
    :sortable="table.sortable"
    :hasCheckbox="table.hasCheckbox"
    @do-search="doSearch"
    @is-finished="table.isLoading = false"
  >
    <template v-slot:action="data">
      <button
        @click.prevent="editRow(data.value.id)"
        class="btn btn-xs btn-primary ms-lg-auto me-lg-1 me-auto mt-lg-0 p-2"
      >
        <i class="fa fa-edit"></i>
      </button>
      <button
        @click.prevent="deleteRow(data.value.id)"
        class="btn btn-xs btn-danger ms-lg-auto me-lg-0 me-auto mt-lg-0 p-2"
      >
        <i class="fa fa-trash"></i>
      </button>
    </template>
  </VueTableLite>
  <nodata :itemList="table.rows"></nodata>
</template>

<script setup>
import { ref, reactive, toRefs } from "vue";
import VueTableLite from "vue3-table-lite";
import { swal } from "@/components/Helpers/swal";
import {
  callApi,
  isSuccess,
  countData,
  noti,
} from "@/components/helpers/common";

const props = defineProps({
  url: {
    type: String,
    default: "",
  },
  filters: {
    type: Object,
    default: () => {
      return {};
    },
  },
  columns: {
    type: Array,
    default: () => {
      return [];
    },
  },
  hasCheckbox: {
    type: Boolean,
    default: false,
  },
});

const { url, filters, columns, hasCheckbox } = toRefs(props);
const emit = defineEmits(["editForm", "deleteData"]);

const table = reactive({
  isLoading: false,
  columns: columns,
  rows: [],
  totalRecordCount: 0,
  currentPage: 1,
  offset: 0,
  limit: 0,
  sortable: {
    order: "id",
    sort: "asc",
  },
  hasCheckbox: hasCheckbox,
});

const deleteRow = async (id) => {
  emit("deleteData", id);
};

const editRow = async (id) => {
  emit("editForm", id);
};

const doSearch = async (offset, limit, order, sort) => {
  table.isLoading = true;

  let data = {
    page: parseInt(offset / limit) + 1,
    filters: {
      per_page: limit,
      order_by: { [order]: sort },
      ...filters.value,
    },
  };

  const { res, error } = await callApi("get", url.value, data);

  const list = res.value.data.data;

  for (let i in list) {
    list[i].count =
      (parseInt(res.value.data.current_page) - parseInt(1)) * parseInt(10) +
      parseInt(i) +
      parseInt(1);
  }

  table.rows = list;
  table.offset = offset;
  table.limit = limit;
  table.sortable.order = order;
  table.sortable.sort = sort;
  table.totalRecordCount = res.value.data.total;
  if (res.value.data.current_page > res.value.data.last_page) {
    table.currentPage = 1;
    doSearch(0, limit, order, sort);
  } else {
    table.currentPage = res.value.data.current_page;
  }
};

doSearch(0, 10, "id", "asc");

defineExpose({
  doSearch,
});
</script>

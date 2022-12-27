<template>
  <div
    class="
      d-flex
      justify-content-center
      text-center
      w-100
      p-1
      border-none
      shadow-none
    "
    v-if="!showProgress"
  >
    <div class="col-lg text-truncate m-1">
      <div class="infobox-3 p-0 w-100 mt-0 border-none shadow-none">
        <slot name="image">
          <img
            src="/custom/img/nodata/403.png"
            class="img-fluid mt-2 mb-4"
            style="width: 350px !important"
            title="Illustrations made by Felic Art @ iconfinder (https://www.iconfinder.com/icons/8159102/look_find_search_folder_icon)"
          />
        </slot>
        <slot name="warning">
          <h3
            style="
              letter-spacing: 1.5px;
              font-family: Quicksand, sans-serif !important;
              margin-bottom: 15px;
            "
          >
            <strong> NO ACCESS TO THIS INFORMATION </strong>
          </h3>
        </slot>
      </div>
    </div>
  </div>
</template>

  <script>
export default {
  props: {
    showProgress: {
      type: Boolean,
      default: false,
    },
  },
};
</script>

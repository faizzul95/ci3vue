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
    v-if="!itemList.length && !showProgress"
  >
    <div class="col-lg text-truncate m-1">
      <div class="infobox-3 p-0 w-100 mt-0 border-none shadow-none">
        <slot name="image">
          <img
            src="/custom/img/nodata/5.png"
            class="img-fluid mt-2 mb-4"
            style="width: 350px !important"
            title="Illustrations made by Felic Art @ iconfinder (https://www.iconfinder.com/icons/8159102/look_find_search_folder_icon)"
          />
        </slot>
        <slot name="warning">
          <h4
            style="
              letter-spacing: 1.5px;
              font-family: Quicksand, sans-serif !important;
              margin-bottom: 15px;
            "
          >
            <strong> NO INFORMATION FOUND </strong>
          </h4>
          <h5 class="info-heading mt-2 font-14 word-wrap">
            Here are some action suggestions for you to try :-
          </h5>
        </slot>
        <slot v-if="showSuggestion" name="suggestions">
          <div class="row d-flex justify-content-center w-100">
            <div
              class="col-lg m-1 text-left"
              style="
                max-width: 350px !important;
                letter-spacing: 1px;
                font-family: Quicksand, sans-serif !important;
                font-size: 12px;
              "
            >
              1. Try the registrar function (if available).<br />
              2. Change your word or search selection.<br />
              3. Contact the system support immediately.<br />
            </div>
          </div>
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
    itemList: {
      type: Array,
      default() {
        return [];
      },
    },
    showSuggestion: {
      type: Boolean,
      default: true,
    },
  },
};
</script>

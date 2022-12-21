<template>
  <icon-base
    icon-name="edit"
    :width="width"
    :height="height"
    :icon-color="iconColor"
  >
    <svg
      version="1.1"
      id="Layer_1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 512 512"
      style="enable-background: new 0 0 512 512"
      xml:space="preserve"
    >
      <polygon
        style="fill: #ff9d49"
        points="393.29,213.665 142.441,464.524 87.044,424.954 345.817,150.364 "
      />
      <polygon
        style="fill: #ffcc75"
        points="353.73,158.277 87.044,424.954 47.473,369.557 298.333,118.708 "
      />
      <polygon
        style="fill: #bd1515"
        points="512,94.965 440.78,166.185 377.475,118.708 464.522,47.486 "
      />
      <polygon
        style="fill: #f2484b"
        points="464.516,47.482 385.382,126.615 345.817,71.224 417.038,0.002 "
      />
      <g>
        <rect
          x="335.974"
          y="75.292"
          transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 731.5841 -18.1559)"
          style="fill: #082947"
          width="67.157"
          height="134.292"
        />
        <polygon
          style="fill: #082947"
          points="71.22,488.261 0,511.998 23.736,440.776 63.305,448.692 	"
        />
      </g>
      <polygon
        style="fill: #f2ebd9"
        points="47.473,369.557 23.736,440.776 71.22,488.261 142.441,464.524 "
      />
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
      <g></g>
    </svg>
  </icon-base>
</template>

<script>
import IconBase from "./IconBase.vue";

export default {
  props: {
    iconName: {
      type: String,
      default: "box",
    },
    width: {
      type: [Number, String],
      default: 24,
    },
    height: {
      type: [Number, String],
      default: 24,
    },
    iconColor: {
      type: String,
      default: "currentColor",
    },
    backgroundColor: {
      type: Boolean,
      default: true,
    },
  },
  components: { IconBase },
};
</script>

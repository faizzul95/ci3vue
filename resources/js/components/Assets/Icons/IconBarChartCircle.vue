<template>
  <icon-base
    icon-name="bar-chart-circle"
    :width="width"
    :height="height"
    :icon-color="iconColor"
  >
    <svg
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 64 64"
      style="enable-background: new 0 0 64 64"
      xml:space="preserve"
    >
      <g id="Layer_1">
        <g>
          <circle
            class="icon-bar-chart-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g class="icon-bar-chart-circle-st1">
          <g>
            <path
              class="icon-bar-chart-circle-st2"
              d="M18,28h-4c-2.2,0-4,1.8-4,4v13c0,2.2,1.8,4,4,4h8V32C22,29.8,20.2,28,18,28z"
            />
          </g>
          <g>
            <path
              class="icon-bar-chart-circle-st2"
              d="M34,13h-4c-2.2,0-4,1.8-4,4v32h12V17C38,14.8,36.2,13,34,13z"
            />
          </g>
          <g>
            <path
              class="icon-bar-chart-circle-st2"
              d="M50,33h-4c-2.2,0-4,1.8-4,4v12h8c2.2,0,4-1.8,4-4v-8C54,34.8,52.2,33,50,33z"
            />
          </g>
        </g>
        <g>
          <g>
            <path
              class="icon-bar-chart-circle-st3"
              d="M18,26h-4c-2.2,0-4,1.8-4,4v13c0,2.2,1.8,4,4,4h8V30C22,27.8,20.2,26,18,26z"
            />
          </g>
          <g>
            <path
              class="icon-bar-chart-circle-st4"
              d="M34,11h-4c-2.2,0-4,1.8-4,4v32h12V15C38,12.8,36.2,11,34,11z"
            />
          </g>
          <g>
            <path
              class="icon-bar-chart-circle-st5"
              d="M50,31h-4c-2.2,0-4,1.8-4,4v12h8c2.2,0,4-1.8,4-4v-8C54,32.8,52.2,31,50,31z"
            />
          </g>
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-bar-chart-circle-st0 {
  fill: #4f5d73;
}
.icon-bar-chart-circle-st1 {
  opacity: 0.2;
}
.icon-bar-chart-circle-st2 {
  fill: #231f20;
}
.icon-bar-chart-circle-st3 {
  fill: #e0e0d1;
}
.icon-bar-chart-circle-st4 {
  fill: #76c2af;
}
.icon-bar-chart-circle-st5 {
  fill: #ffffff;
}
</style>

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

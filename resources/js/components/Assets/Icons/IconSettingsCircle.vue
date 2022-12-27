<template>
  <icon-base
    icon-name="settings-circle"
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
            class="icon-settings-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g>
          <path
            class="icon-settings-circle-st1"
            d="M32,52c-1.1,0-2-0.9-2-2V18c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2v32C34,51.1,33.1,52,32,52L32,52z"
          />
        </g>
        <g>
          <path
            class="icon-settings-circle-st1"
            d="M46,52c-1.1,0-2-0.9-2-2V18c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2v32C48,51.1,47.1,52,46,52L46,52z"
          />
        </g>
        <g>
          <path
            class="icon-settings-circle-st1"
            d="M18,52c-1.1,0-2-0.9-2-2V18c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2v32C20,51.1,19.1,52,18,52L18,52z"
          />
        </g>
        <g class="icon-settings-circle-st2">
          <circle class="icon-settings-circle-st3" cx="45.9" cy="38" r="4" />
        </g>
        <g class="icon-settings-circle-st2">
          <circle class="icon-settings-circle-st3" cx="32" cy="27" r="4" />
        </g>
        <g class="icon-settings-circle-st2">
          <circle class="icon-settings-circle-st3" cx="18" cy="44" r="4" />
        </g>
        <g>
          <circle class="icon-settings-circle-st4" cx="45.9" cy="36" r="4" />
        </g>
        <g>
          <circle class="icon-settings-circle-st4" cx="32" cy="25" r="4" />
        </g>
        <g>
          <circle class="icon-settings-circle-st4" cx="18" cy="42" r="4" />
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-settings-circle-st0 {
  fill: #76c2af;
}
.icon-settings-circle-st1 {
  fill: #4f5d73;
}
.icon-settings-circle-st2 {
  opacity: 0.2;
}
.icon-settings-circle-st3 {
  fill: #231f20;
}
.icon-settings-circle-st4 {
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

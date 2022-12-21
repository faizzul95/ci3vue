<template>
  <icon-base
    icon-name="calendar-circle"
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
            class="icon-calendar-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : {'fill': 'none'}]"
          />
        </g>
        <g>
          <g class="icon-calendar-circle-st1">
            <path
              class="icon-calendar-circle-st2"
              d="M12,25v25c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4V25H12z"
            />
          </g>
          <g>
            <path
              class="icon-calendar-circle-st3"
              d="M12,23v25c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4V23H12z"
            />
          </g>
          <g class="icon-calendar-circle-st1">
            <path
              class="icon-calendar-circle-st2"
              d="M48,14H16c-2.2,0-4,1.8-4,4v7h40v-7C52,15.8,50.2,14,48,14z"
            />
          </g>
          <g>
            <path
              class="icon-calendar-circle-st4"
              d="M48,12H16c-2.2,0-4,1.8-4,4v7h40v-7C52,13.8,50.2,12,48,12z"
            />
          </g>
          <g>
            <path
              class="icon-calendar-circle-st5"
              d="M32,48c-1.1,0-2-0.9-2-2c0-5.5,1.8-9.5,3.5-12H27c-1.1,0-2-0.9-2-2s0.9-2,2-2h11c0.9,0,1.6,0.6,1.9,1.4
				s0,1.7-0.7,2.2C39,33.8,34,37.5,34,46C34,47.1,33.1,48,32,48z"
            />
          </g>
          <g class="icon-calendar-circle-st1">
            <path
              class="icon-calendar-circle-st2"
              d="M20,21c-1.1,0-2-0.9-2-2v-7c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2v7C22,20.1,21.1,21,20,21L20,21z"
            />
          </g>
          <g class="icon-calendar-circle-st1">
            <path
              class="icon-calendar-circle-st2"
              d="M45,21c-1.1,0-2-0.9-2-2v-7c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2v7C47,20.1,46.1,21,45,21L45,21z"
            />
          </g>
          <g>
            <path
              class="icon-calendar-circle-st6"
              d="M20,19c-1.1,0-2-0.9-2-2v-7c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2v7C22,18.1,21.1,19,20,19L20,19z"
            />
          </g>
          <g>
            <path
              class="icon-calendar-circle-st6"
              d="M45,19c-1.1,0-2-0.9-2-2v-7c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2v7C47,18.1,46.1,19,45,19L45,19z"
            />
          </g>
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-calendar-circle-st0 {
  fill: #77b3d4;
}
.icon-calendar-circle-st1 {
  opacity: 0.2;
}
.icon-calendar-circle-st2 {
  fill: #231f20;
}
.icon-calendar-circle-st3 {
  fill: #ffffff;
}
.icon-calendar-circle-st4 {
  fill: #c75c5c;
}
.icon-calendar-circle-st5 {
  fill: #4f5d73;
}
.icon-calendar-circle-st6 {
  fill: #e0e0d1;
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

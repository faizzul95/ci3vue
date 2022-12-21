<template>
  <icon-base
    icon-name="document-circle"
    :width="width"
    :height="height"
    :icon-color="iconColor"
    ><svg
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
            class="icon-document-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g>
          <g>
            <g class="icon-document-circle-st1">
              <path
                class="icon-document-circle-st2"
                d="M36,23v-9H19c-1.7,0-3,1.3-3,3v34c0,1.7,1.3,3,3,3h26c1.7,0,3-1.3,3-3V26h-9C37.3,26,36,24.7,36,23z"
              />
            </g>
            <g>
              <path
                class="icon-document-circle-st3"
                d="M36,21v-9H19c-1.7,0-3,1.3-3,3v34c0,1.7,1.3,3,3,3h26c1.7,0,3-1.3,3-3V24h-9C37.3,24,36,22.7,36,21z"
              />
            </g>
            <g class="icon-document-circle-st1">
              <polygon
                class="icon-document-circle-st2"
                points="37,23.3 48,33 48,24 				"
              />
            </g>
            <g>
              <path
                class="icon-document-circle-st4"
                d="M36,12v9c0,1.7,1.3,3,3,3h9L36,12z"
              />
            </g>
          </g>
          <g class="icon-document-circle-st1">
            <rect
              x="22"
              y="22"
              class="icon-document-circle-st2"
              width="9.6"
              height="2"
            />
          </g>
          <g class="icon-document-circle-st1">
            <rect
              x="22"
              y="32"
              class="icon-document-circle-st2"
              width="20"
              height="2"
            />
          </g>
          <g class="icon-document-circle-st1">
            <rect
              x="22"
              y="27"
              class="icon-document-circle-st2"
              width="20"
              height="2"
            />
          </g>
          <g class="icon-document-circle-st1">
            <rect
              x="22"
              y="37"
              class="icon-document-circle-st2"
              width="20"
              height="2"
            />
          </g>
          <g class="icon-document-circle-st1">
            <rect
              x="22"
              y="42"
              class="icon-document-circle-st2"
              width="20"
              height="2"
            />
          </g>
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-document-circle-st0 {
  fill: #e0995e;
}
.icon-document-circle-st1 {
  opacity: 0.2;
}
.icon-document-circle-st2 {
  fill: #231f20;
}
.icon-document-circle-st3 {
  fill: #e0e0d1;
}
.icon-document-circle-st4 {
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

<template>
    <icon-base
        icon-name="clipboard-circle"
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
                        class="icon-clipboard-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-clipboard-circle-st1">
                    <path
                        class="icon-clipboard-circle-st2"
                        d="M48,14H16c-2.2,0-4,1.8-4,4v5.5V50c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4V23.5V18C52,15.8,50.2,14,48,14z"
                    />
                </g>
                <g>
                    <path
                        class="icon-clipboard-circle-st3"
                        d="M48,12H16c-2.2,0-4,1.8-4,4v5.5V48c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4V21.5V16C52,13.8,50.2,12,48,12z"
                    />
                </g>
                <g class="icon-clipboard-circle-st1">
                    <rect
                        x="16"
                        y="18"
                        class="icon-clipboard-circle-st2"
                        width="32"
                        height="32"
                    />
                </g>
                <g>
                    <rect
                        x="16"
                        y="16"
                        class="icon-clipboard-circle-st4"
                        width="32"
                        height="32"
                    />
                </g>
                <g>
                    <rect
                        x="22"
                        y="24"
                        class="icon-clipboard-circle-st5"
                        width="20"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="22"
                        y="28"
                        class="icon-clipboard-circle-st5"
                        width="20"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="22"
                        y="32"
                        class="icon-clipboard-circle-st5"
                        width="20"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="22"
                        y="36"
                        class="icon-clipboard-circle-st5"
                        width="20"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="22"
                        y="40"
                        class="icon-clipboard-circle-st5"
                        width="20"
                        height="2"
                    />
                </g>
                <g class="icon-clipboard-circle-st1">
                    <path
                        class="icon-clipboard-circle-st2"
                        d="M37,12H27h-3v3v1v1c0,1.7,1.3,3,3,3h10c1.7,0,3-1.3,3-3v-1v-1v-3H37z"
                    />
                </g>
                <g>
                    <path
                        class="icon-clipboard-circle-st6"
                        d="M37,10H27h-3v3v1v1c0,1.7,1.3,3,3,3h10c1.7,0,3-1.3,3-3v-1v-1v-3H37z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-clipboard-circle-st0 {
    fill: #77b3d4;
}
.icon-clipboard-circle-st1 {
    opacity: 0.2;
}
.icon-clipboard-circle-st2 {
    fill: #231f20;
}
.icon-clipboard-circle-st3 {
    fill: #e0995e;
}
.icon-clipboard-circle-st4 {
    fill: #ffffff;
}
.icon-clipboard-circle-st5 {
    fill: #e0e0d1;
}
.icon-clipboard-circle-st6 {
    fill: #4f5d73;
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

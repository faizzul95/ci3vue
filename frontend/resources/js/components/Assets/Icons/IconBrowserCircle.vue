<template>
    <icon-base
        icon-name="browser-circle"
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
                        class="icon-browser-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-browser-circle-st1">
                    <path
                        class="icon-browser-circle-st2"
                        d="M52,48c0,2.2-1.8,4-4,4H16c-2.2,0-4-1.8-4-4V18c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4V48z"
                    />
                </g>
                <g>
                    <path
                        class="icon-browser-circle-st3"
                        d="M12,21.5V46c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4V21.5H12z"
                    />
                </g>
                <g class="icon-browser-circle-st1">
                    <path
                        class="icon-browser-circle-st2"
                        d="M52,18c0-2.2-1.8-4-4-4H16c-2.2,0-4,1.8-4,4v6h40V18z"
                    />
                </g>
                <g>
                    <path
                        class="icon-browser-circle-st4"
                        d="M52,16c0-2.2-1.8-4-4-4H16c-2.2,0-4,1.8-4,4v6h40V16z"
                    />
                </g>
                <g>
                    <circle
                        class="icon-browser-circle-st5"
                        cx="23"
                        cy="17"
                        r="2"
                    />
                </g>
                <g>
                    <circle
                        class="icon-browser-circle-st6"
                        cx="29"
                        cy="17"
                        r="2"
                    />
                </g>
                <g>
                    <circle
                        class="icon-browser-circle-st7"
                        cx="17"
                        cy="17"
                        r="2"
                    />
                </g>
                <g>
                    <rect
                        x="16"
                        y="28"
                        class="icon-browser-circle-st8"
                        width="12"
                        height="18"
                    />
                </g>
                <g>
                    <rect
                        x="32"
                        y="28"
                        class="icon-browser-circle-st4"
                        width="16"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="32"
                        y="32"
                        class="icon-browser-circle-st4"
                        width="16"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="32"
                        y="36"
                        class="icon-browser-circle-st4"
                        width="16"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="32"
                        y="40"
                        class="icon-browser-circle-st4"
                        width="16"
                        height="2"
                    />
                </g>
                <g>
                    <rect
                        x="32"
                        y="44"
                        class="icon-browser-circle-st4"
                        width="16"
                        height="2"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-browser-circle-st0 {
    fill: #77b3d4;
}
.icon-browser-circle-st1 {
    opacity: 0.2;
}
.icon-browser-circle-st2 {
    fill: #231f20;
}
.icon-browser-circle-st3 {
    fill: #ffffff;
}
.icon-browser-circle-st4 {
    fill: #e0e0d1;
}
.icon-browser-circle-st5 {
    fill: #e0995e;
}
.icon-browser-circle-st6 {
    fill: #76c2af;
}
.icon-browser-circle-st7 {
    fill: #c75c5c;
}
.icon-browser-circle-st8 {
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

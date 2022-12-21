<template>
    <icon-base
        icon-name="bookshelf-circle"
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
                        class="icon-bookshelf-circle-st0"
                        cx="31.8"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-bookshelf-circle-st1">
                    <path
                        class="icon-bookshelf-circle-st2"
                        d="M52,48c0,1.1-0.9,2-2,2H14c-1.1,0-2-0.9-2-2l0,0c0-1.1,0.9-2,2-2h36C51.1,46,52,46.9,52,48L52,48z"
                    />
                </g>
                <g>
                    <path
                        class="icon-bookshelf-circle-st3"
                        d="M52,46c0,1.1-0.9,2-2,2H14c-1.1,0-2-0.9-2-2l0,0c0-1.1,0.9-2,2-2h36C51.1,44,52,44.9,52,46L52,46z"
                    />
                </g>
                <g>
                    <path
                        class="icon-bookshelf-circle-st4"
                        d="M23,20h-4c-1.7,0-3,1.3-3,3v17v1v3h3h4h3v-3v-1V23C26,21.3,24.7,20,23,20z"
                    />
                </g>
                <g>
                    <path
                        class="icon-bookshelf-circle-st5"
                        d="M45,16h-4c-1.7,0-3,1.3-3,3v21v1v3h3h4h3v-3v-1V19C48,17.3,46.7,16,45,16z"
                    />
                </g>
                <g>
                    <rect
                        x="16"
                        y="24"
                        class="icon-bookshelf-circle-st3"
                        width="10"
                        height="3"
                    />
                </g>
                <g>
                    <rect
                        x="16"
                        y="37"
                        class="icon-bookshelf-circle-st3"
                        width="10"
                        height="3"
                    />
                </g>
                <g>
                    <rect
                        x="38"
                        y="37"
                        class="icon-bookshelf-circle-st6"
                        width="10"
                        height="3"
                    />
                </g>
                <g>
                    <rect
                        x="38"
                        y="20"
                        class="icon-bookshelf-circle-st6"
                        width="10"
                        height="3"
                    />
                </g>
                <g>
                    <g class="icon-bookshelf-circle-st1">
                        <path
                            class="icon-bookshelf-circle-st2"
                            d="M40,40V16.2c-1.2,0.4-2,1.5-2,2.8v21v1v3h2v-3V40z"
                        />
                    </g>
                    <g class="icon-bookshelf-circle-st1">
                        <path
                            class="icon-bookshelf-circle-st2"
                            d="M26,40V23c0-1.3-0.8-2.4-2-2.8V40v1v3h2v-3V40z"
                        />
                    </g>
                </g>
                <g>
                    <path
                        class="icon-bookshelf-circle-st7"
                        d="M35,12h-6c-1.7,0-3,1.3-3,3v25v1v3h3h6h3v-3v-1V15C38,13.3,36.7,12,35,12z"
                    />
                </g>
                <g>
                    <rect
                        x="26"
                        y="16"
                        class="icon-bookshelf-circle-st8"
                        width="12"
                        height="3"
                    />
                </g>
                <g>
                    <rect
                        x="26"
                        y="37"
                        class="icon-bookshelf-circle-st8"
                        width="12"
                        height="3"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-bookshelf-circle-st0 {
    fill: #77b3d4;
}
.icon-bookshelf-circle-st1 {
    opacity: 0.2;
}
.icon-bookshelf-circle-st2 {
    fill: #231f20;
}
.icon-bookshelf-circle-st3 {
    fill: #e0995e;
}
.icon-bookshelf-circle-st4 {
    fill: #c75c5c;
}
.icon-bookshelf-circle-st5 {
    fill: #e0e0d1;
}
.icon-bookshelf-circle-st6 {
    fill: #ffffff;
}
.icon-bookshelf-circle-st7 {
    fill: #4f5d73;
}
.icon-bookshelf-circle-st8 {
    fill: #76c2af;
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

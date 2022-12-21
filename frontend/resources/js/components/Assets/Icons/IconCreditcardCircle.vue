<template>
    <icon-base
        icon-name="creditcard-circle"
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
                        class="icon-creditcard-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-creditcard-circle-st1">
                    <path
                        class="icon-creditcard-circle-st2"
                        d="M52,45c0,2.2-1.8,4-4,4H16c-2.2,0-4-1.8-4-4V25c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4V45z"
                    />
                </g>
                <g>
                    <path
                        class="icon-creditcard-circle-st3"
                        d="M52,43c0,2.2-1.8,4-4,4H16c-2.2,0-4-1.8-4-4V23c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4V43z"
                    />
                </g>
                <g>
                    <rect
                        x="12"
                        y="25"
                        class="icon-creditcard-circle-st4"
                        width="40"
                        height="6"
                    />
                </g>
                <g>
                    <circle
                        class="icon-creditcard-circle-st5"
                        cx="38"
                        cy="41"
                        r="2"
                    />
                </g>
                <g>
                    <circle
                        class="icon-creditcard-circle-st5"
                        cx="46"
                        cy="41"
                        r="2"
                    />
                </g>
                <g>
                    <circle
                        class="icon-creditcard-circle-st5"
                        cx="30"
                        cy="41"
                        r="2"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-creditcard-circle-st0 {
    fill: #77b3d4;
}
.icon-creditcard-circle-st1 {
    opacity: 0.2;
}
.icon-creditcard-circle-st2 {
    fill: #231f20;
}
.icon-creditcard-circle-st3 {
    fill: #ffffff;
}
.icon-creditcard-circle-st4 {
    fill: #4f5d73;
}
.icon-creditcard-circle-st5 {
    fill: #e0995e;
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

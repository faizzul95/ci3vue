<template>
    <icon-base
        icon-name="folder-circle"
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
                        class="icon-folder-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-folder-circle-st1">
                    <g>
                        <path
                            class="icon-folder-circle-st2"
                            d="M32,22.9h-0.4H14.5c-1.4,0-2.5,1.1-2.5,2.4v22.2c0,1.4,1.1,2.5,2.5,2.5h35c1.4,0,2.5-1.1,2.5-2.5V27.8v-2.5
				v-2.4H32z"
                        />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            class="icon-folder-circle-st3"
                            d="M32,20.9h-0.4H14.5c-1.4,0-2.5,1.1-2.5,2.4v22.2c0,1.4,1.1,2.5,2.5,2.5h35c1.4,0,2.5-1.1,2.5-2.5V25.8v-2.5
				v-2.4H32z"
                        />
                    </g>
                </g>
                <g>
                    <path
                        class="icon-folder-circle-st4"
                        d="M52,18.5c0-1.4-1.1-2.5-2.5-2.5H37c-1.4,0-2.5,1.1-2.5,2.5c0,0-0.3,2.3-2.5,2.5h20V18.5z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-folder-circle-st0 {
    fill: #e0995e;
}
.icon-folder-circle-st1 {
    opacity: 0.2;
}
.icon-folder-circle-st2 {
    fill: #231f20;
}
.icon-folder-circle-st3 {
    fill: #ffffff;
}
.icon-folder-circle-st4 {
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

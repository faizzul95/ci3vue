<template>
    <icon-base
        icon-name="briefcase-circle"
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
                        class="icon-briefcase-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-briefcase-circle-st1">
                    <path
                        class="icon-briefcase-circle-st2"
                        d="M52,45c0,2.2-1.8,4-4,4H16c-2.2,0-4-1.8-4-4V25c0-2.2,1.8-4,4-4h32c2.2,0,4,1.8,4,4V45z"
                    />
                </g>
                <g>
                    <path
                        class="icon-briefcase-circle-st3"
                        d="M38,16v20H26V16H38 M38,12H26c-2.2,0-4,1.8-4,4v20c0,2.2,1.8,4,4,4h12c2.2,0,4-1.8,4-4V16
			C42,13.8,40.2,12,38,12L38,12z"
                    />
                </g>
                <g>
                    <g>
                        <path
                            class="icon-briefcase-circle-st3"
                            d="M12,28v15c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4V28H12z"
                        />
                    </g>
                </g>
                <g class="icon-briefcase-circle-st1">
                    <path
                        class="icon-briefcase-circle-st2"
                        d="M52,25c0-2.2-1.8-4-4-4H16c-2.2,0-4,1.8-4,4v5h40V25z"
                    />
                </g>
                <g class="icon-briefcase-circle-st1">
                    <g>
                        <path
                            class="icon-briefcase-circle-st2"
                            d="M40,32c0,2.2-1.8,4-4,4h-8c-2.2,0-4-1.8-4-4v-3c0-2.2,1.8-4,4-4h8c2.2,0,4,1.8,4,4V32z"
                        />
                    </g>
                </g>
                <g>
                    <path
                        class="icon-briefcase-circle-st4"
                        d="M36,27v3h-8v-3H36 M36,23h-8c-2.2,0-4,1.8-4,4v3c0,2.2,1.8,4,4,4h8c2.2,0,4-1.8,4-4v-3C40,24.8,38.2,23,36,23
			L36,23z"
                    />
                </g>
                <g>
                    <path
                        class="icon-briefcase-circle-st3"
                        d="M52,23c0-2.2-1.8-4-4-4H16c-2.2,0-4,1.8-4,4v5h40V23z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-briefcase-circle-st0 {
    fill: #4f5d73;
}
.icon-briefcase-circle-st1 {
    opacity: 0.2;
}
.icon-briefcase-circle-st2 {
    fill: #231f20;
}
.icon-briefcase-circle-st3 {
    fill: #e0995e;
}
.icon-briefcase-circle-st4 {
    fill: #f5cf87;
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

<template>
    <icon-base
        icon-name="chat-circle"
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
                        class="icon-chat-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-chat-circle-st1">
                    <path
                        class="icon-chat-circle-st2"
                        d="M52,32c0-9.9-9-18-20-18s-20,8.1-20,18c0,9.6,8.3,17.4,18.8,17.9C31.5,53.6,32,56,32,56s5-3,9.6-8.2
			C47.8,44.7,52,38.8,52,32z"
                    />
                </g>
                <g>
                    <path
                        class="icon-chat-circle-st3"
                        d="M49,28.8C49,43.8,32,54,32,54s-9.4-42,0-42S49,19.5,49,28.8z"
                    />
                </g>
                <g>
                    <ellipse
                        class="icon-chat-circle-st3"
                        cx="32"
                        cy="30"
                        rx="20"
                        ry="18"
                    />
                </g>
                <g>
                    <circle
                        class="icon-chat-circle-st4"
                        cx="32"
                        cy="30"
                        r="2"
                    />
                </g>
                <g>
                    <circle
                        class="icon-chat-circle-st4"
                        cx="40"
                        cy="30"
                        r="2"
                    />
                </g>
                <g>
                    <circle
                        class="icon-chat-circle-st4"
                        cx="24"
                        cy="30"
                        r="2"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-chat-circle-st0 {
    fill: #77b3d4;
}
.icon-chat-circle-st1 {
    opacity: 0.2;
}
.icon-chat-circle-st2 {
    fill: #231f20;
}
.icon-chat-circle-st3 {
    fill: #ffffff;
}
.icon-chat-circle-st4 {
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

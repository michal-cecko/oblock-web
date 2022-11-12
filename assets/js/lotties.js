LottieInteractivity.create({
    player: '#hamburger',
    mode: "cursor",
    actions: [
        {
            type: "toggle"
        }
    ]
});

LottieInteractivity.create({
    player: '#loader-icon',
    mode: "chain",
    actions: [
        {
            state: 'loop',
        },
    ]
});
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                inter: ["InterVariable", ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", ...defaultTheme.fontFamily.sans],
                "trade-gothic": [
                    "TradeGothic",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            colors: {
                primary: "#FAFBFC",
                secondary: "#CDEAE1",
                salmon: "#FF8682",
                "fade-black": "#1C1B1F",
                "fade-gray": "#79747E",
                "mint-green": "#8DD3BB",
                "blackish-green": "#112211",
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ["active"],
        },
    },
    content: [
        "./app/**/*.php",
        "./resources/**/*.html",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.ts",
        "./resources/**/*.tsx",
        "./resources/**/*.php",
        "./resources/**/*.vue",
        "./resources/**/*.twig",
    ],
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};

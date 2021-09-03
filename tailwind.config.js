module.exports = {
  mode: 'jit',
  purge: {
    content: ['./public/themes/lesydrangees/**/*.php'],
    safelist: ["yd_purple-700"]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      yd_purple: {
        50: "#ede3f7",
        100: "#d3c0e7",
        200: "#b994e0",
        300: "#9f62df",
        400: "#842de1",
        500: "#6a11cb",
        600: "#5104a4",
        700: "#390372",
        800: "#200241",
        900: "#07000f",
      },
      yd_blue: {
        50: "#dbf4ff",
        100: "#a8e4ff",
        200: "#75d3ff",
        300: "#4cc0f6",
        400: "#27aae7",
        500: "#218aba",
        600: "#226787",
        700: "#1d4558",
        800: "#0d2835",
        900: "#020a0d",
      },
      yd_gray: {
        50: "#e8e8e9",
        100: "#cfced0",
        200: "#b6b4b7",
        300: "#9d9a9e",
        400: "#848085",
        500: "#6a666b",
        600: "#504d51",
        700: "#363437",
        800: "#1c1b1d",
        900: "#080708",
      },
      yd_pink: {
        50: "#fff5f8",
        100: "#fdd8e3",
        200: "#f6acc1",
        300: "#ea85a2",
        400: "#d96384",
        500: "#c34468",
        600: "#ac2a4f",
        700: "#8c1838",
        800: "#660b24",
        900: "#3a0312",
      }
    },
    extend: {
      spacing: {
        "10px": "10px",
        "15px": "15px",
        "20px": "20px",
        "30px": "30px",
        "35px": "35px",
        "40px": "40px",
        "50px": "50px",
        "60px": "60px",
        "65px": "65px",
        "70px": "70px",
        "80px": "80px",
        "90px": "90px",
        "100px": "100px !important",
        "250px": "250px !important",
        "300px": "300px !important",
        "450px": "450px !important",
        "500px": "500px !important",
        "25vw": "25vw",
        "40vw": "40vw",
        "60vw": "60vw",
        "80vw": "80vw",
        "80vh": "80vh",
        "90vh": "90vh",
        "80p":"80%"
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

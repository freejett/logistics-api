import './bootstrap';

import { createApp } from "vue";
import Main from "./Main.vue";
import router from "./routes.js";

const app = createApp(Main);
app.use(router).mount("#app");

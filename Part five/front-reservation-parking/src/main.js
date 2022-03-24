import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import { Quasar, Notify } from "quasar";
import quasarUserOptions from "./quasar-user-options";

createApp(App)
  .use(
    Quasar,
    {
      plugins: {
        Notify,
      },
      config: {
        notify: {},
      },
    },
    quasarUserOptions
  )
  .use(store)
  .use(router)
  .mount("#app");

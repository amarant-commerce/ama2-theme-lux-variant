import {initialize} from "@AmarantFramework/ui/alpine/initializer";
import {initialize as vueInitialize} from "@AmarantFramework/ui/vue/app";

const boot = () => {
    initialize();
    vueInitialize();
};

export default boot;
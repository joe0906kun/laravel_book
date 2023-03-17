import axios from "axios";
/* empty css       */import Alpine from "alpinejs";
import Vapor from "laravel-vapor";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.Vapor = Vapor;
window.Vapor.withBaseAssetUrl({}.VITE_VAPOR_ASSET_URL);
window.Alpine = Alpine;
Alpine.start();

# Web VR Panorama API

🌎 基于 A-Frame 的 VR 全景网页视图 API 🔐

## 📦️ 调用说明

本 API 标准接口为 `api.php`，以下为参数说明：

| Parameter   | Type  | Lore                           |
| ----------- | ----- | ------------------------------ |
| `url_type`  | `GET` | `local` or `http`              |
| `image_url` | `GET` | The local filename or full URL |

当 `url_type` 为 `local` 时，程序会读取 `./images/` 目录下名为 `image_url` 的 JPG 图像，例如：

- [https://vrpanoramaapi.soraharu.com/api.php?url_type=local&image_url=snow1](https://vrpanoramaapi.soraharu.com/api.php?url_type=local&image_url=snow1)

此时获取的图片地址为：

- [./images/snow1.jpg](./images/snow1.jpg)

相当于以下文件：

- [https://vrpanoramaapi.soraharu.com/images/snow1.jpg](https://vrpanoramaapi.soraharu.com/images/snow1.jpg)

当 `url_type` 为 `http` 或 `https` 时，程序将会读取 `image_url` 指向的完整路径的图像，您需要确保 `image_url` 指向的图像可以被访问，例如：

- [https://vrpanoramaapi.soraharu.com/api.php?url_type=http&image_url=https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg](https://vrpanoramaapi.soraharu.com/api.php?url_type=http&image_url=https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg)

此时获取的图片地址为：

- [https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg](https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg)

*请使用桌面浏览器打开以上 URL，图片加载可能较慢，请稍加等待*

## 📜 开源许可

本项目仅供个人学习研究使用，禁止用于商业及非法用途。

基于 [MIT License](https://choosealicense.com/licenses/mit/) 许可进行开源。

## 💕 感谢

- [A-Frame](https://aframe.io/)

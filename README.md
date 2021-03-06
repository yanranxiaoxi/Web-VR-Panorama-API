# Web VR Panorama API

ð åºäº A-Frame ç VR å¨æ¯ç½é¡µè§å¾ API ð

ð [GitLab (Homepage)](https://gitlab.soraharu.com/XiaoXi/Web-VR-Panorama-API) | ð [GitHub](https://github.com/yanranxiaoxi/Web-VR-Panorama-API)

[![vercel](https://vercelbadge.soraharu.com/?app=webvrpanorama-api)](https://webvrpanorama.api.soraharu.com/)

## ð¦ï¸ è°ç¨è¯´æ

æ¬ API æ åæ¥å£ä¸º `https://webvrpanorama.api.soraharu.com/api.php`ï¼ä»¥ä¸ä¸ºåæ°è¯´æï¼

| Parameter   | Type  | Lore                           |
| ----------- | ----- | ------------------------------ |
| `url_type`  | `GET` | `local` or `http`              |
| `image_url` | `GET` | The local filename or full URL |

å½ `url_type` ä¸º `local` æ¶ï¼ç¨åºä¼è¯»å `./images/` ç®å½ä¸åä¸º `image_url` ç JPG å¾åï¼ä¾å¦ï¼

- [https://webvrpanorama.api.soraharu.com/api.php?url_type=local&image_url=snow1](https://webvrpanorama.api.soraharu.com/api.php?url_type=local&image_url=snow1)

æ­¤æ¶è·åçå¾çå°åä¸ºï¼

- [./images/snow1.jpg](https://webvrpanorama.api.soraharu.com/images/snow1.jpg)

ç¸å½äºä»¥ä¸æä»¶ï¼

- [https://webvrpanorama.api.soraharu.com/images/snow1.jpg](https://webvrpanorama.api.soraharu.com/images/snow1.jpg)

å½ `url_type` ä¸º `http` æ `https` æ¶ï¼ç¨åºå°ä¼è¯»å `image_url` æåçå®æ´è·¯å¾çå¾åï¼æ¨éè¦ç¡®ä¿ `image_url` æåçå¾åå¯ä»¥è¢«è®¿é®ï¼ä¾å¦ï¼

- [https://webvrpanorama.api.soraharu.com/api.php?url_type=http&image_url=https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg](https://webvrpanorama.api.soraharu.com/api.php?url_type=http&image_url=https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg)

æ­¤æ¶è·åçå¾çå°åä¸ºï¼

- [https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg](https://downloadserver.soraharu.com:7000/Web%20VR%20Panorama%20API/images/snow2.jpg)

*è¯·ä½¿ç¨æ¡é¢æµè§å¨æå¼ä»¥ä¸ URLï¼å¾çå è½½å¯è½è¾æ¢ï¼è¯·ç¨å ç­å¾*

## âï¸ é¨ç½²è³ Vercel

1. åéæ¬ä»åºå° [GitHub.com](https://github.com/) æ [GitLab.com](https://gitlab.com/) ä¸ªäººä»åº
2. å¨ [Vercel](https://vercel.com/) æ°å»ºé¡¹ç®å°ä½ çä¸ªäººä»åº
3. ç­å¾èªå¨é¨ç½²å®æ

## ð å¼æºè®¸å¯

æ¬é¡¹ç®ä»ä¾ä¸ªäººå­¦ä¹ ç ç©¶ä½¿ç¨ï¼ç¦æ­¢ç¨äºåä¸åéæ³ç¨éã

åºäº [MIT License](https://choosealicense.com/licenses/mit/) è®¸å¯è¿è¡å¼æºã

## ð æè°¢

- [A-Frame](https://aframe.io/)

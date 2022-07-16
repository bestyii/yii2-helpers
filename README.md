# 工具类
面向开发的实用工具
## VarDumper 增强类
### VarDumper::die()
非常实用的工具, 在调试过程中经常会在`VarDumper::dump()`,之后手动让程序停止,因此为了更便捷就扩充了此方法
```php
 VarDumper::die($var);
```
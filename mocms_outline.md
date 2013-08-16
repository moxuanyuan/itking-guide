MOCMS V2 Outline
============

##Target
- module化
- 统一的数据模型
- 多语言架构
- 模版系统
- 前端框架
- 后台管理界面
- 后台用户管理系统
- SEO优化

##Module
- Article
- Product
- News
- FAQ
- Gallery
- Video
- Contact Us

##Widget
- Banner
- Tag Cloud
- Social Plugins

##Idea 
###EAV模型
- 基于entity-attribute-value模型
- 任何东西都是entity
- 提供统一：定义attribute、存取value、分类、filter的方法　
 
###XML布局
- 基于xml的模板系统，灵活组合
- xml用来定义页面的逻辑结构
- block跟view可以是一对一、一对多，多对多的关系
- block负责提供view的数据
- veiw负责将数据以html方式显示出来
 
###MVC
- control要起到真正的control作用，负责关键数据的控制，而非一定要取出全部数据，具体数据可以由上面xml布局中block负责，block根据control中关键数据取出相关具体数据进行处理后，再由view显示。PS:关键数据如entityId、userId、moduleId、contentId、weibsiteId、contentId、language 、page等等
- 如何划分model，要想想

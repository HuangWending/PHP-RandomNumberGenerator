# PHP-RandomNumberGenerator
PHP随机数网页
第1行：定义文档类型为HTML。
第2行至第9行：HTML文档的头部，包含文档标题。
第11行：开始HTML文档的主体部分。
第13行：定义一个一级标题，显示为"随机数生成器"。
第15行：开始一个表单元素，设置action属性为"generate_random_numbers.php"，即表单提交后将数据发送到"generate_random_numbers.php"处理。
第16行至第23行：表单的内容。
第17行：为最小范围输入字段添加一个标签。
第18行：创建一个输入字段，类型为数字，用于用户输入最小范围的值。字段的name属性为"minRange"，用于在表单提交时标识该字段。
第20行和第21行：类似地，创建最大范围和数量的输入字段。
第23行：创建一个提交按钮，显示为"生成随机数"。
第25行：结束表单元素。
第27行：结束HTML文档的主体部分。
第28行：结束HTML文档。
第1行：定义文档类型为HTML。
第2行至第9行：HTML文档的头部，包含文档标题。
第11行：开始HTML文档的主体部分。
第13行：定义一个一级标题，显示为"生成随机数结果"。
第15行至第28行：包含了PHP代码，用于处理表单提交的数据并生成随机数结果。
第16行至第18行：从$_POST超全局数组中获取最小范围、最大范围和数量的值，并将其存储在相应的变量中。
第20行：创建一个空数组$randomNumbers，用于存储生成的随机数。
第22行至第26行：使用for循环生成指定数量的随机数。在每次循环中，使用rand()函数生成位于最小范围和最大范围之间的随机数，并将其添加到$randomNumbers数组中。
第28行：使用echo语句输出生成的随机数结果。通过使用implode()函数，将$randomNumbers数组中的元素以逗号和空格连接成一个字符串，与前面的文本进行拼接。
第30行：结束HTML文档的主体部分。
第31行：结束HTML文档。

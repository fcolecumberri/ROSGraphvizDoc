# RGD → ROS Graphviz Documenter → Robot Operating System Graph Visualization Architecture Documenter

This sistem is made to be able to design and document ROS architecture in a simple way.

## Requirements

- make
- php (any version)
- git (just to `git clone` this proyect)

## Quick Start

We really sugest you to start reading this file until the end.
However I am sure sometimes we want to see something's value
before spending time learning how to use it.
To quick start, clone the proect with `git`, then
open a terminal, go to the
`ROSGraphvizDoc` directory (A.K.A the main directory) and execute `make`.
Once you do that, whatever is programed in `src/main.php` will be plotted
in `RGDcore.png`.
If you need more examples, check the `examples/<any directories>/main.php`
for more examples, copy their content in `src/main.php`, `make` and check.

## How RGD works

RGD uses Php as framework to generate a Graphviz `.dot` file
named `RGDcore.dot`
(similar as how Php generate `.html` files). Then with the `RGDcore.dot` file
Graphviz generate `RGDcore.png` file with the image containing the information.

The way the nodes and topics take their shapes are inspired in the `ROS::rqt`
visualization tool. Everything else were own decisions.

Once you programmed your architecture you should just type `make`
in the main directory to generate the architecture image.

## Programming guide

Before you start, there are some things you may considere:

- Everything you are going to “program” should be in the `src/` directory.
- The main file is `src/main.php`.
- If your architecture is quite big, you may split into several files and
include them using the Php's `include` function,
but it should be `include "src/my_file.php"`.

### General options

The file `Options.php` contain the global options to manage how
Graphviz will execute.
Each option have a comment that describe what it does.
You may also set the options on your source file
(A.K.A `src/main.php` or any file included from it)
to override the `Options.php`.

### ProgresState

you will notice that as you continue reading this file, ProgresState
will be a common type of data.
This is used to modify the color of the element.

The current ProgresState's are:

- ProgresState::to_do
- ProgresState::doing
- ProgresState::testing
- ProgresState::done
- ProgresState::known_bugs
- ProgresState::not_used

The porpoise of this feature is to easily track progress once you
start developing the architecture you already designed.
You may add your own ProgresState (if needed) in the file
`RGDcore/ProgresState.php`.
If you add your own ProgresState remember to also add the color
(check Graphviz doc for color names)
associated with that ProgresState in the same file.

### dot_variable_name

Also during this documentation you may find a string type field
name `dot_variable_name`.
Since in ROS you may give the same name to a node, a topic and a service
if we take the name of the node, topic and service as the name of the
Graphviz variable, then name collisions may appear.
This variable is going to became the variable name in the
`RGDcore.dot` file and you should be sure that each name is unique.

Namespaces and multy-robot groupings prepend a string
to avoid name collisions and be able to use them in a for loop
(multy-robot groupings feature is in ToDo list).

### Topic
To program a ROS's topic:

```php
$topic_variable = new Topic(
	"dot_variable_name",
	"topic name",
	"topic's associated msg",
	ProgresState = ProgresState::to_do
);
```

### Service
To program a ROS's service:

```php
$service_variable = new Service(
	"dot_variable_name",
	"service name",
	"service's associated srv",
	ProgresState = ProgresState::to_do
);
```

### External

Sometime your Node will communicate with other
elements that are not Topics nor Services
(for example:
Sensors,
Actuators,
Web Servers,
Microcontrollers,
FPGAs,
WebCams,
Arduinos,
Unix Pipes,
Unix fifo,
Ros' Bags,
Serial ports,
Socket-type files,
Lidars,
UltraSounds,
InfraReds,
Servos,
Motors,
Controller Boards,
"/dev/whatevers",
etc.).
You may want to include this elements in the architecture so you will be
sure how the architecture interacts with the rest of te system
and have a more complete documentation of the architecture.
Representing this kind of elements
is the porpoise of the `External` elements.

To program an External element:

```php
$exteral_element_variable = new External(
	"dot_variable_name",
	"External element name"
);
```

### Node

To program a ROS's node:

```php
$node_variable = new Node(
	"dot_variable_name",
	"node name",
	ProgresState = ProgresState::to_do
);
```

Once you instanced your Node, to stablish that your Node
will advertise a topic/Service or will send information
to a external element, you should:

```php
$node_variable->advertise(
	$topic_or_service_or_external_variable,
	"Note" = ""
);
```

To establish that your Node
will subscribe a topic/Service or will send information
to a external element, you should:

```php
$node_variable->subscribe(
	$topic_or_service_or_external_variable,
	"Note" = ""
);
```

The note is going to be place in the arrow of the connection.
The intended use for the note is that when a connection
is remapped you may add something like
'Remapped from \image' so when you need to debug your
architecture and contrast it with the documentation
and rqt graph, you may remember where the node originally think
its getting/sending the information.

#### RGD Node Good Practice

There are something that we have found to be a good practice
to make easier to analyze the graph once the graph became big enough
to became a non-trivial-to-read graph:

- If a Node was not programmed by you, but it is a Node you downloaded
from a 3rd party package (This include ROS official packages)
try to begin name the node with the schema
`author::package::node_name \n doc_web_page`
(taking advantage that Graphviz respect `\n`as new line)
so for example if you see a node named
`sheaffej::roboclaw_driver::roboclaw \n https://github.com/sheaffej/roboclaw_driver`
and/or
`sonyccd::roboclaw_driver::roboclaw \n https://github.com/sonyccd/roboclaw_ros`
and/or
`ROS::opencv_apps::edge_detection \n http://wiki.ros.org/opencv_apps`
once you start debugging
(because debug is never a skippable step)
and things do not go as you expected
it will be easier to distinguish which nodes you need to check the code
and which you need to check the 3rd party docs and where the doc is.

Also if we as a community preserve this standard,
read others doc will be easier

### Namespaces

In ROS is not common, but also not rare to need to launch
several instances of the same Node with different NameSpaces.
for this you may use `RosNameSpace` to generate the namespace
(notice that since `namespace` is a reserved word in Php,
the class name is `RosNameSpace`).
The Namespace will prepend the namespace dot_variable
and the Namespace's name
to the elements added so the elements will not have
dot name collision and will appear with the
`namespace/element` convention.

To program a Namespace:

```php
$namespace_variable = new RosNameSpace(
	"dot_variable_name",
	"namespace name"
);
```

To add elements to your namespace code:

```php
$namespace_variable->add($element)
);
```

The elements that you may add to the namespace are:

- Topic
- Service
- Node
- RosNameSpace

Notice that you may add a namespace inside a namespace.

### Robot

(this is not developed yet the idea is to make a
Graphviz cluster similar to the Namespace,
but to be able to explain multiple robot architecture in the same
graph)

## ToDo

- The multy-Robot clustering
- A web-crawler that check http://wiki.ros.org to automatically
generate the documentation of each package and add them to the
examples directory.
(Ok, this is more like a dream than a something missing and the
main problem is that the structure of the documentation
of each package goes from
how-the-developer-that-made-the-doc-wanted structure (at best),
passing to a non-consistent structure (might need a little of NLP)
and in the worst case scenario that is non-documented-documentation
structure).
(This is not a priority of mine, but if a student of cybermetry
or web data minning is searching for a proyect that would benefit
society... this might be an excellent call).
- Add actionlib's action server and client
- I do not know how nodelet and pluginlib work so maybe once I check them
it would be a good idea to add them here.
- ROS-Industrial and ROS2 might have some new stuff that might be good to
add, but I do not know them, once I get some time to check them, maybe
new things will be added.

## F.A.Q

#### Why did you used php?

Since html and Graphviz are both descriptive languages it came natural
to use a web programming language to program a graphviz framework.
Since the web programming language that I know best is php,
that was my solution.

To be honest, php became a great tool to develop this framework and
I regret nothing after using it in this case.
I also think that even if you do not know php,
just by looking the examples any programmer should
understand this in less than 5 minutes.

#### I notice that you are using $global[] and other stuff that are not consider a good practices, why don you use... instead?.

The debate about what is and what is not a “Good Practice” in php
(or any language)
might became hot, to avoid that the only thing I will say is that
“Good Practice” are meant to be used when you make a webserver
or database connector
(Php's main porpouses) and
since this is not a conventional php program, “Good Practice”
do not apply here.

#### I want to debug what I have done?

You may check the `RGDcore.dot` to contrast what you programmed to
what RGD made.

#### I want to send a debug message, but when I use echo, everything goes to the `RGDcore.dot` file?

Since `STDOUT` goes to the `RGDcore.dot` file, you may use `STDERR`

```php
fwrite(STDERR, "Debug message");
```

#### How do I use this in windows?

I do not know.

#### I do not want to have my file saved in a `.png` file, how do I change that?

You may change the makefile `FORMAT` variable to one that graphviz accept.
at the current moment the ones that the graphviz doc say that accept are:

- dot
- xdot
- ps
- pdf
- svg
- svgz
- fig
- png
- gif
- jpg
- jpeg
- json
- ima
- cmapx

#### Graphviz accept other graphs algorithm's how do I change the dot algorithm?

Change te `DOT` variable in the makefile the ones
that the graphviz doc say that accept are:

- dot
- neato
- twopi
- circo
- fdp
- sfdp
- patchwork
- osage

#### Don't you think that it would be better to make a Doxygen documentation instead of this ReadMe.md file?

Maybe, but I do not think this is going to grow in complexity,
even if I add new stuff. However if I find this is growing in complexity,
a DoxyGen doc will be generated.

#### I want to help, but I am not a programmer, what can I do?
Dont wory, just buy me a cofee at https://ko-fi.com/fcolecumberri

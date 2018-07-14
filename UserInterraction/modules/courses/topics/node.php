<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Node.js</title>
</head>

<body>
    <div class="row col-12">
        <div class="col-4">
            <?php 
                include "../slide.php";
            ?>
        </div>
    </div>

    <div class="col-12">
        <div class="container">
            <!--Navigation Bar-->
            <!--Page Header-->
            <div class="page-header">
                <h1>Node.js</h1>
            </div>


            <!--Accordion style content-->
            <div class="container">
                <div class="panel-group" id="accordion">

                    <!--1. Introduction Tab-->
                    <div class="panel panel-default">
                        <!--Introduction Title-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    <strong>Introduction</strong>
                                </a>
                            </h4>
                        </div>

                        <!--Introduction Content-->
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <li>
                                    Node.js defined from its
                                    <a href="https://nodejs.org/api/index.html">official documentation</a>
                                    </a> states:
                                    <blockquote class="blockquote">
                                        Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model
                                        that makes it lightweight and efficient. Node.js' package ecosystem,
                                        <abbr title="Node Package Manager">npm</abbr>, is the largest ecosystem of open source libraries in the world.
                                    </blockquote>
                                </li>
                                <li>
                                    Node.js is not a programming language, but it provides a large library of modules that can be installed using
                                    <samp>
                                        <abbr title="Node Package Manager">npm</abbr>
                                    </samp> to install its modules, expanding the tools needed for web designing.
                                </li>
                                <li>
                                    Node.js is very versatile it is open source, cross-platform known as JavaScript on the server.
                                </li>
                            </div>
                        </div>
                    </div>

                    <!--Table-->
                    <div class="panel panel-default">
                        <!--Title-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    <strong>File Request Comparison</strong>
                                </a>
                            </h4>
                        </div>

                        <!--Table- Content-->
                        <div id="collapse2" class="panel-collapse collapse in">
                            <div class="panel-body">

                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">PHP and ASP</th>
                                            <th scope="col">Node.js</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Sends task to the computer’s file system</td>
                                            <td>Sends task to the computer’s file system </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Waits while the file system opens and reads the files</td>
                                            <td>Ready to handle the next request</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Returns the content to the client</td>
                                            <td>Returns the content to the client</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <!--REPL Terminal-->
                    <div class="panel panel-default">
                        <!--Title-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    <strong>REPL Terminal</strong>
                                </a>
                            </h4>
                        </div>

                        <!--Content-->
                        <div id="collapse3" class="panel-collapse collapse in">
                            <div class="panel-body">
                                The computer environment, or the console where the command is inputted, the system then responds with an output.

                                <li>
                                    <strong>R</strong> - Read the user input
                                </li>
                                <li>
                                    <strong>E</strong> - Evaluates the data structure
                                </li>
                                <li>
                                    <strong>p</strong> - Prints the output
                                </li>
                                <li>
                                    <strong>L</strong> - Loops the command unless the user presses
                                    <kbd>Ctrl + c</kbd> twice
                                </li>

                                <div class="page-header">
                                    <h4>Running REPL</h4>
                                </div>
                                <ol>
                                    <li>Running on the shell/console
                                        <pre><code >
                                                    node
                                                </code></pre>
                                    </li>

                                    <li>This will then display the REPL command prompt for node.js
                                    </li>
                                </ol>

                                <div class="page-header">
                                    <h4>REPL Commands</h4>
                                </div>
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Keyboard Shortcuts</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1. </th>
                                            <td>
                                                <kbd>Ctrl + c</kbd>
                                            </td>
                                            <td>Terminates the current command</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">2. </th>
                                            <td>
                                                <kbd>Ctrl + c</kbd>
                                                <i>(twice)</i>
                                            </td>
                                            <td>Terminates the Node REPL</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">3. </th>
                                            <td>
                                                <kbd>Ctrl + d</kbd>
                                            </td>
                                            <td>Terminates the current command</td>

                                        </tr>

                                        <tr>
                                            <th scope="row">4. </th>
                                            <td>
                                                <kbd>Up / Down</kbd>
                                            </td>
                                            <td>Looks up the command history</td>

                                        </tr>

                                        <tr>
                                            <th scope="row">5. </th>
                                            <td>
                                                <kbd>Tab</kbd>
                                            </td>
                                            <td>Lists all the current commands</td>

                                        </tr>

                                        <tr>
                                            <th scope="row">6. </th>
                                            <td>
                                                <samp>.help</samp>
                                            </td>
                                            <td>Lists all the REPL commands</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">7. </th>
                                            <td>
                                                <samp>.save
                                                    <i>filename</i>
                                                </samp>
                                            </td>
                                            <td>Saves the current working Node REPL Session</td>

                                        </tr>

                                    </tbody>
                                </table>





                            </div>
                        </div>
                    </div>

                    <!--NPM-->
                    <div class="panel panel-default">
                        <!--Title-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                    <strong>Node Package Manager (NPM)</strong>
                                </a>
                            </h4>
                        </div>

                        <!--Content-->
                        <div id="collapse4" class="panel-collapse collapse in">


                            <ol>
                                <div class="page-header">
                                    <h4>Installing Modules Using NPM</h4>
                                </div>
                                <li>Input the following in the code below we will be using express as a placeholder for the module
                                    to be installed
                                    <pre>
                                                <code>npm install express</code>
                                            </pre>
                                </li>

                                <li>
                                    Installing inside the js file
                                    <pre>
                                                <code>var express = require(‘express’)</code>
                                            </pre>
                                </li>

                                <li>
                                    Wait for the downloading to be finished.
                                </li>
                            </ol>

                        </div>
                    </div>

                    <!--Event Looping-->
                    <div class="panel panel-default">
                        <!--Title-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                    <strong>Event Loop</strong>
                                </a>
                            </h4>
                        </div>

                        <!--Content-->
                        <div id="collapse5" class="panel-collapse collapse in">
                            <ul>
                                <li>
                                    Event Loop is the utilizing the non-blocking feature of Node.js using a single thread to perform the server client interractions.
                                </li>
                                <li>
                                    The single-threaded function makes sure that no resources is wasted on redundant operations. Node.js makes the callback to
                                    be added to the poll after being executed, this serves as a thread pool for the single
                                    thread.
                                </li>
                                <li>
                                    <div class="page-header">
                                        <h4>Event Loop Process</h4>
                                    </div>
                                    <ol>
                                        <li>Node.js initializes the loop</li>
                                        <li>Input script will be processed by the REPL</li>
                                        <li>API timers or schedule timers calls
                                            <samp>process.nextTick()</samp>
                                        </li>
                                        <li>The event loop processing begins</li>
                                        <li>After the operation is completed the single thread will return to the poll, which
                                            will wait for future executions</li>
                                    </ol>


                                </li>
                            </ul>
                        </div>

                        <!--Node Transactopn-->
                        <div class="panel panel-default">
                            <!--Title-->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                        <strong>HTTP Transactions</strong>
                                    </a>
                                </h4>
                            </div>

                            <!--Content-->
                            <div id="collapse6" class="panel-collapse collapse in">
                                <ul>
                                    <li>When an HTTP request hits the server, node calls the request handler function with a
                                        few handy objects for dealing with the transaction, request and response. We'll get
                                        to those shortly.
                                    </li>
                                    <li>To serve requests a
                                        <samp>listen</samp> method is declared for the port number of a particular server.</li>
                                    <li>A request can be handled using methods and URL with appropriate actions</li>
                                    <pre>
                                                <code>
                                                    var.get('/', function(request, results)){
                                                    
                                                    }
                                                </code>
                                            </pre>
                                    <li>When a POST or PUT request is accessing request headers the object is passed into a handler
                                        that will run the
                                        <samp>ReadableStream</samp> interface.</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
    </div>
</body>

</html>
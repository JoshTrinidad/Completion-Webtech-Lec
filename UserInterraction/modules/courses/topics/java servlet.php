<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include "../../head.php" ;
    ?>
    <title>Document</title>
</head>

<body>
  <div class="container">

    <!--Navigation Bar-->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="../index.html">Webtek</a>
        </div>

        <ul class="nav navbar-nav">
          <li>
            <a href="../index.html">Home</a>
          </li>

          <li>
            <a href="./links/java Servlet.html">Java Servlets</a>
          </li>

          <li>
            <a href="../links/php.html">PHP</a>
          </li>

          <li>
            <a href="../links/node.html">Node.js</a>
          </li>

          <li>
            <a href="../links/asp.html">ASP</a>
          </li>

          <li>
            <a href="#">Take the Java Servlet Quiz</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-user"></span> Sign Up</a>
          </li>-->
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-log-in"></span> Logged out </a>
          </li>

        </ul>
      </div>
    </nav>
    <!--End of Navigation Bar-->

    <!--Page Header-->
    <div class="page-header">
      <h1>Java Servlets and Web Services</h1>
    </div>

    <!--Content-->
    <div class="container-fluid">

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
                  Java Servlets are programs that run on an Web Application server and act as a middle layer between a request coming from
                  a Web browser or other HTTP client and databases or applications on the HTTP server.
                </li>

                <li>
                  Servlets can be created using the
                  <samp>javax.servlet</samp> and
                  <samp>javax.servlet.http</samp> packages , which are a standard part of the Java&#39;s enterprise edition, an
                  expanded version of the Java class library that supports large-scale development projects.
                </li>

              </div>
            </div>

          </div>

          <!--2. What does the Servlets do: -->
          <div class="panel panel-default">
            <!--Title-->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                  <strong>What does the Servlets do?</strong>
                </a>
              </h4>
            </div>

            <!--Content-->
            <div id="collapse2" class="panel-collapse collapse in">
              <div class="panel-body">
                <ul>
                  <li>Read the explicit data sent by the clients (browsers)</li>
                  <li>Read the implicit HTTP request data sent by the clients (browsers)</li>
                  <li>Process the data and generate the results</li>
                  <li>Send the explicit data (i.e., the document) to the clients (browsers)</li>
                  <li>Send the implicit HTTP response to the clients (browsers).</li>
                </ul>
              </div>
            </div>

          </div>

          <!--3. Java Object based on the Servlet API-->
          <div class="panel panel-default">
            <!--Title-->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                  <strong>Servlets</strong>
                </a>
              </h4>
            </div>

            <!--Content-->
            <div id="collapse3" class="panel-collapse collapse in">
              <div class="panel-body">

                <ul>
                  <li>
                    Web-tier components in the Java EE architecture this runs in a server application to answer client requests; technically,
                    servlets are not tied to a specific client-server protocol, but they are most commonly used with HTTP
                    and the term "servlet" is often used in the context of an “HTTP Servlet” Runs in, and is managed by,
                    a web-tier container called the "Servlet Container"
                  </li>

                  <br>

                  <li>
                    This is mapped to the URLs to which clients send requests to the server. It is typically asked with (among other things)
                    <ol>
                      <li>Processing and/or storing data submitted via HTML
                        <code>&lt;forms&gt;</code>
                      </li>
                      <li>Generating dynamic content</li>
                    </ol>
                  </li>

                  <!--Java Servlets Packages-->
                  <div class="page-header">
                    <h4>Java Servlets Packages</h4>
                  </div>

                  <!--Java Servlets Contents-->
                  <ol>
                    <li>
                      <samp>javax.servlet</samp>
                    </li>
                    <ul>
                      <samp>
                        <li>Servlet, GenericServlet</li>
                        <li>ServletRequest, ServletResponse</li>
                        <li>ServletConfig, ServletContext</li>
                        <li>RequestDispatcher</li>
                      </samp>
                    </ul>

                    <li>
                      <samp>javax.servlet.http</samp>
                    </li>
                    <ul>
                      <samp>
                        <li>HttpServlet</li>
                        <li>HttpServletRequest</li>
                        <li>HttpServletResponse</li>
                        <li>HttpSession</li>
                        <li>Cookie</li>
                      </samp>
                    </ul>
                  </ol>




                </ul>
              </div>
            </div>
          </div>

          <!--4. Servlet Processing-->
          <div class="panel panel-default">
            <!--Title-->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                  <strong>Servlet Processing</strong>
                </a>
              </h4>
            </div>

            <!--Content-->
            <div id="collapse4" class="panel-collapse collapse in">
              <div class="panel-body">
                <ol>
                  <li>
                    Client sends a request to a web server URL that is mapped to a servlet. Web server passes on the request to the servlet container
                  </li>

                  <br>

                  <li>
                    Servlet container checks if servlet is already loaded
                  </li>

                  <br>

                  <li>
                    If it is not yet loaded, servlet container loads the servlet class and instantiates the servlet, and calls its init method.
                  </li>

                  <br>

                  <li>
                    Servlet container invokes the servlet‟s service method, passing request and response objects as arguments
                  </li>

                  <br>

                  <li>
                    Servlet processes the request using the response object to create the response, which is returned by the servlet container
                    to the web server, which in turn sends the response to the client
                  </li>

                  <br>

                  <li>
                    Subsequent request to the servlet will not require servlet re-instantiation, unless the servlet has been unloaded; before
                    a servlet is unloaded, the servlet container invokes its destroy method
                  </li>
                </ol>


              </div>

            </div>
          </div>

          <!--5. Methods-->
          <div class="panel panel-default">
            <!--Title-->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                  <strong>Methods</strong>
                </a>
              </h4>
            </div>

            <!--Content-->
            <div id="collapse5" class="panel-collapse collapse in">
              <div class="panel-body">
                <ol>
                  <li>
                    <samp>init(config)</samp>
                    <ul>
                      <li>
                        Invoked once on the servlet by the servlet container when the servlet is instantiated; can be used by the servlet for one-time
                        startup initialization
                      </li>
                    </ul>
                  </li>

                  <br>

                  <li>
                    <samp>service(request, response)</samp>
                    <ul>
                      <li>Invoked each time the servlet is called upon to process a request (typically on a separate thread for
                        each call)</li>
                      <li>In HttpServlet, the default Service implementation maps the call to a specific
                        <samp>doSomething()</samp> method (e.g.
                        <samp>doGet</samp>,
                        <samp>doPost</samp>) which is typically overridden to affect the servlet's functionality</li>
                    </ul>
                  </li>

                  <li>
                    <samp>destroy()</samp>
                    <ul>
                      <li>Invoked on the servlet by the servlet container when the servlet is to be unloaded (e.g. when the application
                        is stopped or undeployed); can be used by the servlet for clean-up processing (e.g. resource deallocation)</li>
                    </ul>
                  </li>

                </ol>


              </div>

            </div>
          </div>

          <!--6. HTTP Servlet-->
          <div class="panel panel-default">
            <!--Title-->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                  <strong>HTTP Servlet</strong>
                </a>
              </h4>
            </div>

            <!--Content-->
            <div id="collapse6" class="panel-collapse collapse in">
              <div class="panel-body">
                <ol>
                  <li>
                    <strong>
                      <samp>Servlet Request Processing (HttpServletRequest)</samp>
                    </strong>
                  </li>

                  <ul>
                    <li>Retrieving user-supplied request parameters</li>
                    <li>Retrieving request header values</li>
                  </ul>

                  <li>
                    <strong>
                      <samp>Servlet Response Processing (HttpServletResponse)</samp>
                    </strong>
                  </li>

                  <ul>
                    <li>Setting response status code</li>
                    <li>Setting response headers</li>
                    <li>Obtaining output object for sending the response</li>
                  </ul>

                  <li>
                    <strong>
                      <samp>Servlet Request Dispatching (RequestDispatcher)</samp>
                    </strong>
                  </li>

                  <ul>
                    <li>Obtain a RequestDispatcher to a resource (static or dynamic) from the request object
                    </li>
                    <ul>
                      <li>
                        <samp>RequestDispatcher rqstDsp;</samp>
                      </li>
                    </ul>
                    <ul>
                      <li>
                        <samp>rqstDsp = request.getRequestDispatcher(res);</samp>
                      </li>
                    </ul>
                    <li>Include the dispatcher resource (or its output) in the current response; one or more resources can be
                      included (e.g. use for banners, footers, etc.)</li>
                    <ul>
                      <li>
                        <samp> rqstDsp.include(request, response);</samp>
                      </li>
                    </ul>

                    <li>Forwards the processing of the current request to the dispatcher resource; the servlet processing the
                      current request must not generate a response ( e.g. use in MVC “controller” servlets)</li>
                    <ul>
                      <li>
                        <samp> rqstDsp.forward(request, response);</samp>
                      </li>
                    </ul>
                  </ul>

                  <li>
                    <strong>
                      <samp>Session Tracking(HttpSession)</samp>
                    </strong>
                  </li>

                  <ul>
                    <li>Session tracking support is implemented either cookies or URL-rewriting o Obtaining session object from
                      the current request</li>
                    <ul>
                      <li>
                        <samp>HttpSession session;</samp>
                      </li>
                    </ul>

                    <ul>
                      <li>
                        <samp>session = request.getSession(createNew);</samp>
                      </li>
                    </ul>

                    <li>Obtaining session information (HttpSession)</li>
                    <ul>
                      <li>
                        <samp>getCreationTime(), getLastAccessedTime(), getMaxInactiveInternal(),getId(), isNew(), setMaxInactiveInterval(int value)</samp>
                      </li>
                    </ul>

                    <li>Destroying sessions</li>
                    <ul>
                      <li><sample>invalidate()</sample></li>
                    </ul>

                    <li>URL-rewriting(HttpServletResponse)</li>
                    <ul><li><samp>encodeURL(String url), encodeRedirectURL(String url)</samp></li></ul>
                  </ul>
                </ol>
              </div>
            </div>



          </div>

        </div>

      </div>
    </div>

  </div>

  <script src="../js/webtek.js"></script>
  <script src="../css/bootstrap/js/bootstrap.min.js"></script>
  <script src="../css/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
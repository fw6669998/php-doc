<?php

//start Win32Service Service Type Bitmasks
/**
 * The service runs in its own process.
 */
define( "WIN32_SERVICE_WIN32_OWN_PROCESS", 0x00000010 );
/**
 * The service can interact with the desktop. This option is not available on Windows Vista or later.
 */
define( "WIN32_SERVICE_INTERACTIVE_PROCESS", 0x00000100 );
/**
 * The service runs in its own process and can interact with the desktop. This option is not available on Windows Vista
 * or later.
 */
define( "WIN32_SERVICE_WIN32_OWN_PROCESS_INTERACTIVE", 0x00000110 );
//end Win32Service Service Type Bitmasks

//start Win32Service Service Status Constants
/**
 *  The service continue is pending.
 */
define( "WIN32_SERVICE_CONTINUE_PENDING", 0x00000005 );
/**
 *  The service pause is pending.
 */
define( "WIN32_SERVICE_PAUSE_PENDING", 0x00000006 );
/**
 *  The service is paused.
 */
define( "WIN32_SERVICE_PAUSED", 0x00000007 );
/**
 *  The service is running.
 */
define( "WIN32_SERVICE_RUNNING", 0x00000004 );
/**
 *  The service is starting.
 */
define( "WIN32_SERVICE_START_PENDING", 0x00000002 );
/**
 *  The service is stopping.
 */
define( "WIN32_SERVICE_STOP_PENDING", 0x00000003 );
/**
 *  The service is not running.
 */
define( "WIN32_SERVICE_STOPPED", 0x00000001 );
//end Win32Service Service Status Constants

//start Win32Service Service Control Message Constants
/**
 *  Notifies a paused service that it should resume.
 */
define( "WIN32_SERVICE_CONTROL_CONTINUE", 0x00000003 );
/**
 *  Notifies a service that it should report its current status information to the service control manager.
 */
define( "WIN32_SERVICE_CONTROL_INTERROGATE", 0x00000004 );
/**
 *  Notifies a service that it should pause.
 */
define( "WIN32_SERVICE_CONTROL_PAUSE", 0x00000002 );
/**
 *  Notifies a service that the system will be shutting down. A service that handles this notification blocks system
 *  shutdown until the service stops or the preshutdown time-out interval expires. This value is not supported by
 *  Windows Server 2003 and Windows XP/2000.
 */
define( "WIN32_SERVICE_CONTROL_PRESHUTDOWN", 0x0000000F );
/**
 *  Notifies a service that the system is shutting down so the service can perform cleanup tasks. If a service accepts
 *  this control code, it must stop after it performs its cleanup tasks. After the SCM sends this control code, it will
 *  not send other control codes to the service.
 */
define( "WIN32_SERVICE_CONTROL_SHUTDOWN", 0x00000005 );
/**
 *  Notifies a service that it should stop.
 */
define( "WIN32_SERVICE_CONTROL_STOP", 0x00000001 );
//end Win32Service Service Control Message Constants

//start Win32Service Service Control Message Accepted Bitmasks
/**
 *  The service can be paused and continued. This control code allows the service to receive
 *  WIN32_SERVICE_CONTROL_PAUSE and WIN32_SERVICE_CONTROL_CONTINUE notifications.
 */
define( "WIN32_SERVICE_ACCEPT_PAUSE_CONTINUE", 0x00000002 );
/**
 *  The service can perform preshutdown tasks. This control code enables the service to receive
 *  WIN32_SERVICE_CONTROL_PRESHUTDOWN notifications. This value is not supported by Windows Server 2003 and Windows
 *  XP/2000.
 */
define( "WIN32_SERVICE_ACCEPT_PRESHUTDOWN", 0x00000100 );
/**
 *  The service is notified when system shutdown occurs. This control code allows the service to receive
 *  WIN32_SERVICE_CONTROL_SHUTDOWN notifications.
 */
define( "WIN32_SERVICE_ACCEPT_SHUTDOWN", 0x00000004 );
/**
 *  The service can be stopped. This control code allows the service to receive WIN32_SERVICE_CONTROL_STOP
 *  notifications.
 */
define( "WIN32_SERVICE_ACCEPT_STOP", 0x00000001 );
//end Win32Service Service Control Message Accepted Bitmasks

//start Win32Service Service Start Type Constants
/**
 *  A service started automatically by the service control manager during system startup.
 */
define( "WIN32_SERVICE_AUTO_START", 0x00000002 );
/**
 *  A service started by the service control manager when a process calls the StartService function.
 */
define( "WIN32_SERVICE_DEMAND_START", 0x00000003 );
/**
 *  A service that cannot be started. Attempts to start the service result in the error code
 *  WIN32_ERROR_SERVICE_DISABLED.
 */
define( "WIN32_SERVICE_DISABLED", 0x00000004 );
//end Win32Service Service Start Type Constants

//start Win32Service Service Error Control Constants
/**
 *  The startup program ignores the error and continues the startup operation.
 */
define( "WIN32_SERVICE_ERROR_IGNORE", 0x00000000 );
/**
 *  The startup program logs the error in the event log but continues the startup operation.
 */
define( "WIN32_SERVICE_ERROR_NORMAL", 0x00000001 );
//end Win32Service Service Error Control Constants

//start Win32Service Service Flag Constants
/**
 * The service runs in a system process that must always be running.
 */
define( "WIN32_SERVICE_RUNS_IN_SYSTEM_PROCESS", 0x00000001 );
//end Win32Service Service Flag Constants

//start Win32 Error Codes
/**
 * The handle to the SCM database does not have the appropriate access rights.
 */
define( "WIN32_ERROR_ACCESS_DENIED", 0x00000005 );
/**
 * A circular service dependency was specified.
 */
define( "WIN32_ERROR_CIRCULAR_DEPENDENCY", 0x00000423 );
/**
 * The specified database does not exist.
 */
define( "WIN32_ERROR_DATABASE_DOES_NOT_EXIST", 0x00000429 );
/**
 * The service cannot be stopped because other running services are dependent on it.
 */
define( "WIN32_ERROR_DEPENDENT_SERVICES_RUNNING", 0x0000041B );
/**
 * The display name already exists in the service control manager database either as a service name or as another
 * display name.
 */
define( "WIN32_ERROR_DUPLICATE_SERVICE_NAME", 0x00000436 );
/**
 * This error is returned if the program is being run as a console application rather than as a service. If the program
 * will be run as a console application for debugging purposes, structure it such that service-specific code is not
 * called.
 */
define( "WIN32_ERROR_FAILED_SERVICE_CONTROLLER_CONNECT", 0x00000427 );
/**
 * The buffer is too small for the service status structure. Nothing was written to the structure.
 */
define( "WIN32_ERROR_INSUFFICIENT_BUFFER", 0x0000007A );
/**
 * The specified service status structure is invalid.
 */
define( "WIN32_ERROR_INVALID_DATA", 0x0000000D );
/**
 * The handle to the specified service control manager database is invalid.
 */
define( "WIN32_ERROR_INVALID_HANDLE", 0x00000006 );
/**
 * The InfoLevel parameter contains an unsupported value.
 */
define( "WIN32_ERROR_INVALID_LEVEL", 0x0000007C );
/**
 * The specified service name is invalid.
 */
define( "WIN32_ERROR_INVALID_NAME", 0x0000007B );
/**
 * A parameter that was specified is invalid.
 */
define( "WIN32_ERROR_INVALID_PARAMETER", 0x00000057 );
/**
 * The user account name specified in the user parameter does not exist. See win32_create_service().
 */
define( "WIN32_ERROR_INVALID_SERVICE_ACCOUNT", 0x00000421 );
/**
 * The requested control code is not valid, or it is unacceptable to the service.
 */
define( "WIN32_ERROR_INVALID_SERVICE_CONTROL", 0x0000041C );
/**
 * The service binary file could not be found.
 */
define( "WIN32_ERROR_PATH_NOT_FOUND", 0x00000003 );
/**
 * An instance of the service is already running.
 */
define( "WIN32_ERROR_SERVICE_ALREADY_RUNNING", 0x00000420 );
/**
 * The requested control code cannot be sent to the service because the state of the service is WIN32_SERVICE_STOPPED,
 * WIN32_SERVICE_START_PENDING, or WIN32_SERVICE_STOP_PENDING.
 */
define( "WIN32_ERROR_SERVICE_CANNOT_ACCEPT_CTRL", 0x00000425 );
/**
 * The database is locked.
 */
define( "WIN32_ERROR_SERVICE_DATABASE_LOCKED", 0x0000041F );
/**
 * The service depends on a service that does not exist or has been marked for deletion.
 */
define( "WIN32_ERROR_SERVICE_DEPENDENCY_DELETED", 0x00000433 );
/**
 * The service depends on another service that has failed to start.
 */
define( "WIN32_ERROR_SERVICE_DEPENDENCY_FAIL", 0x0000042C );
/**
 * The service has been disabled.
 */
define( "WIN32_ERROR_SERVICE_DISABLED", 0x00000422 );
/**
 * The specified service does not exist as an installed service.
 */
define( "WIN32_ERROR_SERVICE_DOES_NOT_EXIST", 0x00000424 );
/**
 * The specified service already exists in this database.
 */
define( "WIN32_ERROR_SERVICE_EXISTS", 0x00000431 );
/**
 * The service did not start due to a logon failure. This error occurs if the service is configured to run under an
 * account that does not have the "Log on as a service" right.
 */
define( "WIN32_ERROR_SERVICE_LOGON_FAILED", 0x0000042D );
/**
 * The specified service has already been marked for deletion.
 */
define( "WIN32_ERROR_SERVICE_MARKED_FOR_DELETE", 0x00000430 );
/**
 * A thread could not be created for the service.
 */
define( "WIN32_ERROR_SERVICE_NO_THREAD", 0x0000041E );
/**
 * The service has not been started.
 */
define( "WIN32_ERROR_SERVICE_NOT_ACTIVE", 0x00000426 );
/**
 * The process for the service was started, but it did not call StartServiceCtrlDispatcher, or the thread that called
 * StartServiceCtrlDispatcher may be blocked in a control handler function.
 */
define( "WIN32_ERROR_SERVICE_REQUEST_TIMEOUT", 0x0000041D );
/**
 * The system is shutting down; this function cannot be called.
 */
define( "WIN32_ERROR_SHUTDOWN_IN_PROGRESS", 0x0000045B );
/**
 * No error.
 */
define( "WIN32_NO_ERROR", 0x00000000 );
//end Win32 Error Codes

//start Win32 Base Priority Classes
/**
 *  Process that has priority above WIN32_NORMAL_PRIORITY_CLASS but below WIN32_HIGH_PRIORITY_CLASS.
 */
define( "WIN32_ABOVE_NORMAL_PRIORITY_CLASS", 0x00008000 );
/**
 *  Process that has priority above WIN32_IDLE_PRIORITY_CLASS but below WIN32_NORMAL_PRIORITY_CLASS.
 */
define( "WIN32_BELOW_NORMAL_PRIORITY_CLASS", 0x00004000 );
/**
 *  Process that performs time-critical tasks that must be executed immediately. The threads of the process preempt the
 *  threads of normal or idle priority class processes. An example is the Task List, which must respond quickly when
 *  called by the user, regardless of the load on the operating system. Use extreme care when using the high-priority
 *  class, because a high-priority class application can use nearly all available CPU time.
 */
define( "WIN32_HIGH_PRIORITY_CLASS", 0x00000080 );
/**
 *  Process whose threads run only when the system is idle. The threads of the process are preempted by the threads of
 *  any process running in a higher priority class. An example is a screen saver. The idle-priority class is inherited
 *  by child processes.
 */
define( "WIN32_IDLE_PRIORITY_CLASS", 0x00000040 );
/**
 *  Process with no special scheduling needs.
 */
define( "WIN32_NORMAL_PRIORITY_CLASS", 0x00000020 );
/**
 *  Process that has the highest possible priority. The threads of the process preempt the threads of all other
 *  processes, including operating system processes performing important tasks. For example, a real-time process that
 *  executes for more than a very brief interval can cause disk caches not to flush or cause the mouse to be
 *  unresponsive.
 */
define( "WIN32_REALTIME_PRIORITY_CLASS", 0x00000100 );
//end Win32 Base Priority Classes

/**
*<div id="function.win32-continue-service" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_continue_service</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_continue_service</span> &mdash; <span class="dc-title">Resumes a paused service</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-continue-service-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>win32_continue_service</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servicename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$machine</span></span>   ] )</div>       <p class="para rdfs-comment">    Resumes a paused, named service. Requires administrative privileges or     an account with appropriate rights set in the service&#039;s ACL.   </p>     </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-continue-service-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">servicename</span></dt>       <dd>        <p class="para">        The short name of the service.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">machine</span></dt>       <dd>        <p class="para">        Optional machine name.  If omitted, the local machine is used.       </p>      </dd>          </dl>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-continue-service-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>WIN32_NO_ERROR</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>       <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.win32-continue-service-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0.3.0</td>        <td>         This function does not longer require an administrator account if ACL is set for another account.        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-continue-service-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_start_service()} - Starts a service</span></li>     <li class="member"><span class="function">{@link win32_stop_service()} - Stops a service</span></li>     <li class="member"><span class="function">{@link win32_pause_service()} - Pauses a service</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 Error Codes</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return int Returns WIN32_NO_ERROR on success, FALSE if there is a problem with the parameters or a Win32 Error Code*/
function win32_continue_service( $serviceName, $machine = "" ) { }

/**
 * Creates a new service entry in the SCM database
 *
 * @param array  $details
 *                              <ul>
 *                              <li>
 *                              <em>service</em>
 *                              The short name of the service. This is the name that you will use to control the
 *                              service
 *                              using the net command. The service must be unique (no two services can share the same
 *                              name), and, ideally, should avoid having spaces in the name.
 *                              </li>
 *
 *                          <li>
 *                              <em>display</em>
 *                              The display name of the service. This is the name that you will see in the Services
 *                              Applet.
 *                          </li>
 *
 *                          <li>
 *                              <em>description</em>
 *                              The long description of the service. This is the description that you will see in the
 *                              Services Applet.
 *                          </li>
 *
 *                          <li>
 *                              <em>user</em>
 *                              The name of the user account under which you want the service to run. If omitted, the
 *                              service will run as the LocalSystem account. If the username is specified, you must
 *                              also provide a password.
 *                          </li>
 *
 *                          <li>
 *                              <em>password</em>
 *                              The password that corresponds to the user.
 *                          </li>
 *
 *                          <li>
 *                              <em>path</em>
 *                              The full path to the executable module that will be launched when the service is
 *                              started. If omitted, the path to the current PHP process will be used.
 *                          </li>
 *
 *                          <li>
 *                              <em>params</em>
 *                              Command line parameters to pass to the service when it starts. If you want to run a PHP
 *                              script as the service, then the first parameter should be the full path to the PHP
 *                              script that you intend to run. If the script name or path contains spaces, then wrap
 *                              the full path to the PHP script with ".
 *                          </li>
 *
 *                          <li>
 *                              <em>load_order</em>
 *                              Controls the load_order. This is not yet fully supported.
 *                          </li>
 *
 *                          <li>
 *                              <em>svc_type</em>
 *                              Sets the service type. If omitted, the default value is
 *                              WIN32_SERVICE_WIN32_OWN_PROCESS. Don't change this unless you know what you're doing.
 *                          </li>
 *
 *                          <li>
 *                              <em>start_type</em>
 *                              Specifies how the service should be started. The default is WIN32_SERVICE_AUTO_START
 *                              which means the service will be launched when the machine starts up.
 *                          </li>
 *
 *                          <li>
 *                              <em>error_control</em>
 *                              Informs the SCM what it should do when it detects a problem with the service. The
 *                              default is WIN32_SERVER_ERROR_IGNORE. Changing this value is not yet fully supported.
 *                          </li>
 *
 *                          <li>
 *                              <em>delayed_start</em>
 *                              If delayed_start is set to TRUE, then this will inform the SCM that this service should
 *                              be started after other auto-start services are started plus a short delay.
 *
 *                              Any service can be marked as a delayed auto-start service; however, this setting has no
 *                              effect unless the service's start_type is WIN32_SERVICE_AUTO_START.
 *
 *                              This setting is only applicable on Windows Vista and Windows Server 2008 or greater.
 *                          </li>
 *
 *                          <li>
 *                              <em>base_priority</em>
 *                              To reduce the impact on processor utilisation, it may be necessary to set a base
 *                              priority lower than normal.
 *
 *                              The base_priority can be set to one of the constants define in Win32 Base Priority
 *                              Classes.
 *                          </li>
 * </ul>
 * @param string $machine       The optional machine name on which you want to create a service. If omitted, it will
 *                              use the local machine.
 *
 * @return int Returns WIN32_NO_ERROR on success, FALSE if there is a problem with the parameters or a Win32 Error Code
 *             on failure.
 */

/**
*<div id="function.win32-create-service" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_create_service</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_create_service</span> &mdash; <span class="dc-title">Creates a new service entry in the SCM database</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-create-service-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>win32_create_service</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">array</span> <span class="parameter" style="color:#2EACF9">$details</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$machine</span></span>   ] )</div>    <p class="para rdfs-comment">    Attempts to add a service into the SCM database.  Administrative    privileges are required for this to succeed.   </p>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-create-service-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">details</span></dt>       <dd>        <p class="para">        An array of service details:        <dl>                    <dt> <span class="parameter" style="color:#2EACF9">service</span></dt>           <dd>            <p class="para">            The short name of the service.  This is the name that you            will use to control the service using the <em>net</em>            command.  The service must be unique (no two services can share the            same name), and, ideally, should avoid having spaces in the name.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">display</span></dt>           <dd>            <p class="para">The display name of the service.  This is the name that you           will see in the Services Applet.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">description</span></dt>           <dd>            <p class="para">The long description of the service.  This is the description           that you will see in the Services Applet.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">user</span></dt>           <dd>            <p class="para">            The name of the user account under which you want the service to            run.  If omitted, the service will run as the LocalSystem account.            If the username is specified, you must also provide a password.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">password</span></dt>           <dd>            <p class="para">            The password that corresponds to the <span class="parameter" style="color:#2EACF9">user</span>.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">path</span></dt>           <dd>            <p class="para">            The full path to the executable module that will be launched when            the service is started.  If omitted, the path to the current PHP            process will be used.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">params</span></dt>           <dd>            <p class="para">            Command line parameters to pass to the service when it starts.            If you want to run a PHP script as the service, then the first            parameter should be the full path to the PHP script that you intend            to run. If the script name or path contains spaces, then wrap the            full path to the PHP script with <em>&quot;</em>.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">load_order</span></dt>           <dd>            <p class="para">            Controls the load_order.  This is not yet fully supported.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">svc_type</span></dt>           <dd>            <p class="para">            Sets the service type.  If omitted, the default value is            <strong><span>WIN32_SERVICE_WIN32_OWN_PROCESS</span></strong>.            Don&#039;t change this unless you know what you&#039;re doing.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">start_type</span></dt>           <dd>            <p class="para">            Specifies how the service should be started.  The default is            <strong><span>WIN32_SERVICE_AUTO_START</span></strong> which means the            service will be launched when the machine starts up.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">error_control</span></dt>           <dd>            <p class="para">            Informs the SCM what it should do when it detects a problem with            the service.  The default is            <strong><span>WIN32_SERVER_ERROR_IGNORE</span></strong>.  Changing this            value is not yet fully supported.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">delayed_start</span></dt>           <dd>            <p class="para">            If <span class="parameter" style="color:#2EACF9">delayed_start</span> is set to <strong><span>TRUE</span></strong>, then this            will inform the SCM that this service should be started after other            auto-start services are started plus a short delay.           </p>           <p class="para">            Any service can be marked as a delayed auto-start service; however,            this setting has no effect unless the service&#039;s            <span class="parameter" style="color:#2EACF9">start_type</span> is            <strong><span>WIN32_SERVICE_AUTO_START</span></strong>.           </p>           <p class="para">            This setting is only applicable on Windows Vista and Windows Server            2008 or greater.           </p>          </dd>                             <dt> <span class="parameter" style="color:#2EACF9">base_priority</span></dt>           <dd>            <p class="para">            To reduce the impact on processor utilisation, it may be necessary            to set a base priority lower than normal.           </p>           <p class="para">            The <span class="parameter" style="color:#2EACF9">base_priority</span> can be set to one of the            constants define in            <a href="http://php.net/manual/zh/win32service.constants.basepriorities.php" class="link">Win32 Base Priority Classes</a>.           </p>          </dd>                  </dl>        </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">machine</span></dt>       <dd>        <p class="para">        The optional machine name on which you want to create a service.        If omitted, it will use the local machine.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-create-service-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>WIN32_NO_ERROR</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.win32-create-service-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6451">     <p><strong>Example #1 A <span class="function"><strong style="color:#CC7832">win32_create_service()</strong></span> example</strong></p>     <div class="example-contents"><p>      Create a service with the short name &#039;dummyphp&#039;.     </p></div>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$x&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">win32_create_service</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'service'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dummyphp'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;the&nbsp;name&nbsp;of&nbsp;your&nbsp;service<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'display'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sample&nbsp;dummy&nbsp;PHP&nbsp;service'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;short&nbsp;description<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'description'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;dummy&nbsp;Windows&nbsp;service&nbsp;created&nbsp;using&nbsp;PHP.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">#&nbsp;long&nbsp;description<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'params'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'"'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">__FILE__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"&nbsp;&nbsp;run'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;path&nbsp;to&nbsp;the&nbsp;script&nbsp;and&nbsp;parameters<br /></span><span style="color: #007700">));<br /></span><span style="color: #9876AA">debug_zval_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$x</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-create-service-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_delete_service()} - Deletes a service entry from the SCM database</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.basepriorities.php" class="link">Win32 Base Priority Classes</a></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 Error Codes</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
*/
function win32_create_service( $details, $machine = "" ) { }

/**
*<div id="function.win32-delete-service" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_delete_service</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_delete_service</span> &mdash; <span class="dc-title">Deletes a service entry from the SCM database</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-delete-service-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>win32_delete_service</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servicename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$machine</span></span>   ] )</div>     <p class="para rdfs-comment">    Attempts to delete a service from the SCM database.  Administrative    privileges are required for this to succeed.   </p>   <p class="para">    This function really just marks the service for deletion.  If other    processes (such as the Services Applet) are open, then the deletion will be    deferred until those applications are closed.  If a service is marked for    deletion, further attempts to delete it will fail, and attempts to create a    new service with that name will also fail.   </p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-delete-service-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">servicename</span></dt>       <dd>        <p class="para">        The short name of the service.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">machine</span></dt>       <dd>        <p class="para">        The optional machine name.  If omitted, the local machine will be used.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-delete-service-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>WIN32_NO_ERROR</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.win32-delete-service-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-6452">     <p><strong>Example #1 A <span class="function"><strong style="color:#CC7832">win32_delete_service()</strong></span> example</strong></p>     <div class="example-contents"><p>      Deletes the dummyphp service.     </p></div>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />win32_delete_service</span><span style="color: #007700">(</span><span style="color: #DD0000">'dummyphp'</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-delete-service-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_create_service()} - Creates a new service entry in the SCM database</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 Error Codes</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return int Returns WIN32_NO_ERROR on success, FALSE if there is a problem with the parameters or a Win32 Error Code*/
function win32_delete_service( $serviceName, $machine = "" ) { }

/**
*<div id="function.win32-get-last-control-message" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_get_last_control_message</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_get_last_control_message</span> &mdash; <span class="dc-title">Returns the last control message that was sent to this service</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-get-last-control-message-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>win32_get_last_control_message</strong></span>     ( <span class="methodparam">void</span>    )</div>       <p class="para rdfs-comment">    Returns the control code that was last sent to this service process.    When running as a service you should periodically check this to determine if    your service needs to stop running.   </p>      <div class="caution"><strong class="caution">Caution</strong>    <p class="para">     Since version 0.2.0, this function work only in &quot;cli&quot; SAPI. On other SAPI      this function is disabled.    </p>   </div>     </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-get-last-control-message-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a control constant which will be one of the    <a href="http://php.net/manual/zh/win32service.constants.servicecontrol.php" class="link">Win32Service Service Control Message Constants</a>:    <strong><span>WIN32_SERVICE_CONTROL_CONTINUE</span></strong>,    <strong><span>WIN32_SERVICE_CONTROL_INTERROGATE</span></strong>,    <strong><span>WIN32_SERVICE_CONTROL_PAUSE</span></strong>,    <strong><span>WIN32_SERVICE_CONTROL_PRESHUTDOWN</span></strong>,    <strong><span>WIN32_SERVICE_CONTROL_SHUTDOWN</span></strong>,    <strong><span>WIN32_SERVICE_CONTROL_STOP</span></strong>.   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.win32-get-last-control-message-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0.2.0</td>        <td>         This function works only in the <em>&quot;cli&quot;</em> SAPI.        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-get-last-control-message-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_start_service_ctrl_dispatcher()} - Registers the script with the SCM, so that it can act as the service with the given name</span></li>     <li class="member"><span class="function">{@link win32_set_service_status()} - Update the service status</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.servicecontrol.php" class="link">Win32Service Service Control Message Constants</a></li>    </ul>   </span>  </div>    <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return int Returns a control constant which will be one of the Win32Service Service Control Message Constants:*/
function win32_get_last_control_message() { }

/**
*<div id="function.win32-pause-service" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_pause_service</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_pause_service</span> &mdash; <span class="dc-title">Pauses a service</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-pause-service-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>win32_pause_service</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servicename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$machine</span></span>   ] )</div>     <p class="para rdfs-comment">    Pauses a named service. Requires administrative privileges or    an account with appropriate rights set in the service&#039;s ACL.   </p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-pause-service-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">servicename</span></dt>       <dd>        <p class="para">        The short name of the service.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">machine</span></dt>       <dd>        <p class="para">        Optional machine name.  If omitted, the local machine is used.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-pause-service-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>WIN32_NO_ERROR</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.win32-pause-service-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0.3.0</td>        <td>         This function does not longer require an administrator account if ACL is set for another account.        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-pause-service-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_start_service()} - Starts a service</span></li>     <li class="member"><span class="function">{@link win32_stop_service()} - Stops a service</span></li>     <li class="member"><span class="function">{@link win32_continue_service()} - Resumes a paused service</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 Error Codes</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return int Returns WIN32_NO_ERROR on success, FALSE if there is a problem with the parameters or a Win32 Error Code*/
function win32_pause_service( $serviceName, $machine = "" ) { }

/**
*<div id="function.win32-query-service-status" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_query_service_status</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_query_service_status</span> &mdash; <span class="dc-title">Queries the status of a service</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-query-service-status-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>win32_query_service_status</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servicename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$machine</span></span>   ] )</div>     <p class="para rdfs-comment">    Queries the current status for a service, returning an array of    information.   </p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-query-service-status-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">servicename</span></dt>       <dd>        <p class="para">        The short name of the service.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">machine</span></dt>       <dd>        <p class="para">        The optional machine name.  If omitted, the local machine will be used.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-query-service-status-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns an array consisting of the following information on success，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>   <p class="para">    <dl>            <dt> <span class="parameter" style="color:#2EACF9">ServiceType</span></dt>       <dd>        <p class="para">        The dwServiceType. See <a href="http://php.net/manual/zh/win32service.constants.servicetype.php" class="link">Win32Service Service Type Bitmasks</a>.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">CurrentState</span></dt>       <dd>        <p class="para">        The dwCurrentState. See <a href="http://php.net/manual/zh/win32service.constants.servicestatus.php" class="link">Win32Service Service Status Constants</a>.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">ControlsAccepted</span></dt>       <dd>        <p class="para">        Which service controls are accepted by the service. See <a href="http://php.net/manual/zh/win32service.constants.controlsaccepted.php" class="link">Win32Service Service Control Message Accepted Bitmasks</a>.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">Win32ExitCode</span></dt>       <dd>        <p class="para">        If the service exited, the return code from the process.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">ServiceSpecificExitCode</span></dt>       <dd>        <p class="para">        If the service exited with an error condition, the service specific        code that is logged in the event log is visible here.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">CheckPoint</span></dt>       <dd>        <p class="para">        If the service is shutting down, holds the current check point number.        This is used by the SCM as a kind of heart-beat to detect a wedged service        process.  The value of the check point is best interpreted in        conjunction with the WaitHint value.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">WaitHint</span></dt>       <dd>        <p class="para">        If the service is shutting down it will set WaitHint to a checkpoint        value that will indicate 100% completion.  This can be used to        implement a progress indicator.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">ProcessId</span></dt>       <dd>        <p class="para">        The Windows process identifier.  If 0, the process is not running.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">ServiceFlags</span></dt>       <dd>        <p class="para">        The dwServiceFlags. See <a href="http://php.net/manual/zh/win32service.constants.serviceflag.php" class="link">Win32Service Service Service Flag Constants</a>.       </p>      </dd>          </dl>    </p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-query-service-status-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.php" class="link">Win32Service Predefined Constants</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return array Returns an array consisting of the following information on success, FALSE if there is a problem with*/
function win32_query_service_status( $serviceName, $machine = "" ) { }

/**
*<div id="function.win32-set-service-status" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_set_service_status</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_set_service_status</span> &mdash; <span class="dc-title">Update the service status</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-set-service-status-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>win32_set_service_status</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$status</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$checkpoint</span><span class="initializer"> = 0</span></span>   ] )</div>    <p class="para rdfs-comment">    Informs the SCM of the current status of a running service.    This call is only valid for a running service process.   </p>        <div class="caution"><strong class="caution">Caution</strong>    <p class="para">     Since version 0.2.0, this function work only in &quot;cli&quot; SAPI. On other SAPI      this function is disabled.    </p>   </div>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-set-service-status-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">status</span></dt>       <dd>        <p class="para">        The service status code, one of        <strong><span>WIN32_SERVICE_RUNNING</span></strong>,        <strong><span>WIN32_SERVICE_STOPPED</span></strong>,        <strong><span>WIN32_SERVICE_STOP_PENDING</span></strong>,        <strong><span>WIN32_SERVICE_START_PENDING</span></strong>,        <strong><span>WIN32_SERVICE_CONTINUE_PENDING</span></strong>,        <strong><span>WIN32_SERVICE_PAUSE_PENDING</span></strong>,        <strong><span>WIN32_SERVICE_PAUSED</span></strong>.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">checkpoint</span></dt>       <dd>        <p class="para">        The checkpoint value the service increments periodically to report its        progress during a lengthy start, stop, pause, or continue operation.        For example, the service should increment this value as it completes        each step of its initialization when it is starting up.       </p>       <p class="para">        The <span class="parameter" style="color:#2EACF9">checkpoint</span> is only valid when the        <span class="parameter" style="color:#2EACF9">status</span> is one of        <strong><span>WIN32_SERVICE_STOP_PENDING</span></strong>,        <strong><span>WIN32_SERVICE_START_PENDING</span></strong>,        <strong><span>WIN32_SERVICE_CONTINUE_PENDING</span></strong> or        <strong><span>WIN32_SERVICE_PAUSE_PENDING</span></strong>.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-set-service-status-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>TRUE</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.win32-set-service-status-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0.2.0</td>        <td>         This function works only in the <em>&quot;cli&quot;</em> SAPI.        </td>       </tr>       </tbody>         </table>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-set-service-status-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_start_service_ctrl_dispatcher()} - Registers the script with the SCM, so that it can act as the service with the given name</span></li>     <li class="member"><span class="function">{@link win32_get_last_control_message()} - Returns the last control message that was sent to this service</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.servicestatus.php" class="link">Win32Service Service Status Constants</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return mixed Returns TRUE on success, FALSE if there is a problem with the parameters or a Win32 Error Code on*/
function win32_set_service_status( $status, $checkpoint = 0 ) { }

/**
*<div id="function.win32-start-service-ctrl-dispatcher" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_start_service_ctrl_dispatcher</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_start_service_ctrl_dispatcher</span> &mdash; <span class="dc-title">Registers the script with the SCM, so that it can act as the service with the given name</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-start-service-ctrl-dispatcher-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>win32_start_service_ctrl_dispatcher</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$name</span></span>    )</div>     <p class="para rdfs-comment">    When launched via the Service Control Manager, a service process is    required to &quot;check-in&quot; with it to establish service monitoring and    communication facilities.  This function performs the check-in by spawning    a thread to handle the lower-level communication with the service control    manager.   </p>   <p class="para">    Once started, the service process should do 2 things. The first is to tell    the Service Control Manager that the service is running. This is achieved    by calling <span class="function">{@link win32_set_service_status()}</span> with the    <strong><span>WIN32_SERVICE_RUNNING</span></strong> constant. If you need to perform    some lengthy process before the service is actually running, then you can    use the <strong><span>WIN32_SERVICE_START_PENDING</span></strong> constant. The    second is to continue to check-in with the service control manager so that    it can determine if it should terminate. This is achieved by periodically    calling <span class="function">{@link win32_get_last_control_message()}</span> and handling the    return code appropriately.   </p>    <div class="caution"><strong class="caution">Caution</strong>    <p class="para">     Since version 0.2.0, this function work only in &quot;cli&quot; SAPI. On other SAPI      this function is disabled.    </p>   </div>  </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-start-service-ctrl-dispatcher-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">name</span></dt>       <dd>        <p class="para">        The short-name of the service, as registered by        <span class="function">{@link win32_create_service()}</span>.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-start-service-ctrl-dispatcher-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>TRUE</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-function.win32-start-service-ctrl-dispatcher-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example.com1">     <p><strong>Example #1 A <span class="function"><strong style="color:#CC7832">win32_start_service_ctrl_dispatcher()</strong></span> example</strong></p>     <div class="example-contents"><p>      Check if the service is runnig under the SCM.     </p></div>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">if&nbsp;(!</span><span style="color: #9876AA">win32_start_service_ctrl_dispatcher</span><span style="color: #007700">(</span><span style="color: #DD0000">'dummyphp'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;die(</span><span style="color: #DD0000">"I'm&nbsp;probably&nbsp;not&nbsp;running&nbsp;under&nbsp;the&nbsp;service&nbsp;control&nbsp;manager"</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #9876AA">win32_set_service_status</span><span style="color: #007700">(</span><span style="color: #9876AA">WIN32_SERVICE_START_PENDING</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Some&nbsp;lengthy&nbsp;process&nbsp;to&nbsp;get&nbsp;this&nbsp;service&nbsp;up&nbsp;and&nbsp;running.<br /><br /></span><span style="color: #9876AA">win32_set_service_status</span><span style="color: #007700">(</span><span style="color: #9876AA">WIN32_SERVICE_RUNNING</span><span style="color: #007700">);<br /><br />while&nbsp;(</span><span style="color: #9876AA">WIN32_SERVICE_CONTROL_STOP&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #9876AA">win32_get_last_control_message</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;do&nbsp;some&nbsp;work&nbsp;here,&nbsp;trying&nbsp;not&nbsp;to&nbsp;take&nbsp;more&nbsp;than&nbsp;around&nbsp;30&nbsp;seconds<br />&nbsp;&nbsp;#&nbsp;before&nbsp;coming&nbsp;back&nbsp;into&nbsp;the&nbsp;loop&nbsp;again<br /></span><span style="color: #007700">}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>     </div>   </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.win32-start-service-ctrl-dispatcher-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0.2.0</td>        <td>         This function works only in the <em>&quot;cli&quot;</em> SAPI.        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-start-service-ctrl-dispatcher-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_set_service_status()} - Update the service status</span></li>     <li class="member"><span class="function">{@link win32_get_last_control_message()} - Returns the last control message that was sent to this service</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 Error Codes</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return mixed Returns TRUE on success, FALSE if there is a problem with the parameters or a Win32 Error Code on*/
function win32_start_service_ctrl_dispatcher( $name ) { }

/**
*<div id="function.win32-start-service" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_start_service</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_start_service</span> &mdash; <span class="dc-title">Starts a service</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-start-service-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>win32_start_service</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servicename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$machine</span></span>   ] )</div>     <p class="para rdfs-comment">    Attempts to start the named service. Requires administrative privileges or     an account with appropriate rights set in the service&#039;s ACL.   </p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-start-service-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">servicename</span></dt>       <dd>        <p class="para">        The short name of the service.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">machine</span></dt>       <dd>        <p class="para">        Optional machine name.  If omitted, the local machine is used.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-start-service-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>WIN32_NO_ERROR</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.win32-start-service-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0.3.0</td>        <td>         This function does not longer require an administrator account if ACL is set for another account.        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-start-service-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_stop_service()} - Stops a service</span></li>     <li class="member"><span class="function">{@link win32_pause_service()} - Pauses a service</span></li>     <li class="member"><span class="function">{@link win32_continue_service()} - Resumes a paused service</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 Error Codes</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return int Returns WIN32_NO_ERROR on success, FALSE if there is a problem with the parameters or a Win32 Error Code*/
function win32_start_service( $serviceName, $machine = "" ) { }

/**
*<div id="function.win32-stop-service" class="refentry">  <div class="refnamediv">   <h1 class="refname">win32_stop_service</h1>   <p class="verinfo">(PECL win32service SVN)</p><p class="refpurpose"><span class="refname">win32_stop_service</span> &mdash; <span class="dc-title">Stops a service</span></p>   </div>  <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.win32-stop-service-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">int</span> <span class="methodname" style="color:#CC7832"><strong>win32_stop_service</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$servicename</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">string</span> <span class="parameter" style="color:#2EACF9">$machine</span></span>   ] )</div>     <p class="para rdfs-comment">    Stops a named service. Requires administrative privileges or    an account with appropriate rights set in the service&#039;s ACL.   </p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.win32-stop-service-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">servicename</span></dt>       <dd>        <p class="para">        The short name of the service.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">machine</span></dt>       <dd>        <p class="para">        Optional machine name.  If omitted, the local machine is used.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.win32-stop-service-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">     成功时返回 <strong><span>WIN32_NO_ERROR</span></strong>，参数错误时返回 <strong><span>FALSE</span></strong>，或失败时返回一个 <a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 错误码</a>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.win32-stop-service-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>0.3.0</td>        <td>         This function does not longer require an administrator account if ACL is set for another account.        </td>       </tr>       </tbody>         </table>    </span>  </div>     <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.win32-stop-service-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link win32_start_service()} - Starts a service</span></li>     <li class="member"><span class="function">{@link win32_pause_service()} - Pauses a service</span></li>     <li class="member"><span class="function">{@link win32_continue_service()} - Resumes a paused service</span></li>     <li class="member"><a href="http://php.net/manual/zh/win32service.constants.errors.php" class="link">Win32 Error Codes</a></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.win32service.php">win32service 函数</a></div></div>
 * @return int Returns WIN32_NO_ERROR on success, FALSE if there is a problem with the parameters or a Win32 Error Code*/
function win32_stop_service( $serviceName, $machine = "" ) { }
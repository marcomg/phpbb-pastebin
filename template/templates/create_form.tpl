{include file='header.tpl'}
        <div class="container">
            <form class="form-horizontal" action = "index.php?q=create" method = "post">
                <h2 class="form-signin-heading">{t}Past zone{/t}</h2>
                
                <label>{t}Language{/t}</label>
                <select class="span2" name="lang">
                    <option value="text">text</option>
                    <option value="abap">abap</option>
                    <option value="ada">ada</option>
                    <option value="ahk">ahk</option>
                    <option value="antlr">antlr</option>
                    <option value="antlr-as">antlr-as</option>
                    <option value="antlr-cpp">antlr-cpp</option>
                    <option value="antlr-csharp">antlr-csharp</option>
                    <option value="antlr-java">antlr-java</option>
                    <option value="antlr-objc">antlr-objc</option>
                    <option value="antlr-perl">antlr-perl</option>
                    <option value="antlr-python">antlr-python</option>
                    <option value="antlr-ruby">antlr-ruby</option>
                    <option value="apacheconf">apacheconf</option>
                    <option value="applescript">applescript</option>
                    <option value="as">as</option>
                    <option value="as3">as3</option>
                    <option value="aspx-cs">aspx-cs</option>
                    <option value="aspx-vb">aspx-vb</option>
                    <option value="asy">asy</option>
                    <option value="awk">awk</option>
                    <option value="basemake">basemake</option>
                    <option value="bash">bash</option>
                    <option value="bat">bat</option>
                    <option value="bbcode">bbcode</option>
                    <option value="befunge">befunge</option>
                    <option value="blitzmax">blitzmax</option>
                    <option value="boo">boo</option>
                    <option value="brainfuck">brainfuck</option>
                    <option value="bro">bro</option>
                    <option value="c">c</option>
                    <option value="cfengine3">cfengine3</option>
                    <option value="cfm">cfm</option>
                    <option value="cfs">cfs</option>
                    <option value="cheetah">cheetah</option>
                    <option value="clojure">clojure</option>
                    <option value="cmake">cmake</option>
                    <option value="c-objdump">c-objdump</option>
                    <option value="coffee-script">coffee-script</option>
                    <option value="common-lisp">common-lisp</option>
                    <option value="console">console</option>
                    <option value="control">control</option>
                    <option value="coq">coq</option>
                    <option value="cpp">cpp</option>
                    <option value="cpp-objdump">cpp-objdump</option>
                    <option value="csharp">csharp</option>
                    <option value="css">css</option>
                    <option value="css+django">css+django</option>
                    <option value="css+erb">css+erb</option>
                    <option value="css+genshitext">css+genshitext</option>
                    <option value="css+mako">css+mako</option>
                    <option value="css+myghty">css+myghty</option>
                    <option value="css+php">css+php</option>
                    <option value="css+smarty">css+smarty</option>
                    <option value="Cucumber">Cucumber</option>
                    <option value="cython">cython</option>
                    <option value="d">d</option>
                    <option value="dart">dart</option>
                    <option value="delphi">delphi</option>
                    <option value="diff">diff</option>
                    <option value="django">django</option>
                    <option value="d-objdump">d-objdump</option>
                    <option value="dpatch">dpatch</option>
                    <option value="dtd">dtd</option>
                    <option value="duel">duel</option>
                    <option value="dylan">dylan</option>
                    <option value="ec">ec</option>
                    <option value="ecl">ecl</option>
                    <option value="elixir">elixir</option>
                    <option value="erb">erb</option>
                    <option value="erl">erl</option>
                    <option value="erlang">erlang</option>
                    <option value="evoque">evoque</option>
                    <option value="factor">factor</option>
                    <option value="fan">fan</option>
                    <option value="fancy">fancy</option>
                    <option value="felix">felix</option>
                    <option value="fortran">fortran</option>
                    <option value="fsharp">fsharp</option>
                    <option value="gas">gas</option>
                    <option value="genshi">genshi</option>
                    <option value="genshitext">genshitext</option>
                    <option value="glsl">glsl</option>
                    <option value="gnuplot">gnuplot</option>
                    <option value="go">go</option>
                    <option value="gooddata-cl">gooddata-cl</option>
                    <option value="gosu">gosu</option>
                    <option value="groff">groff</option>
                    <option value="groovy">groovy</option>
                    <option value="gst">gst</option>
                    <option value="haml">haml</option>
                    <option value="haskell">haskell</option>
                    <option value="html">html</option>
                    <option value="html+cheetah">html+cheetah</option>
                    <option value="html+django">html+django</option>
                    <option value="html+evoque">html+evoque</option>
                    <option value="html+genshi">html+genshi</option>
                    <option value="html+mako">html+mako</option>
                    <option value="html+myghty">html+myghty</option>
                    <option value="html+php">html+php</option>
                    <option value="html+smarty">html+smarty</option>
                    <option value="html+velocity">html+velocity</option>
                    <option value="http">http</option>
                    <option value="hx">hx</option>
                    <option value="hybris">hybris</option>
                    <option value="iex">iex</option>
                    <option value="ini">ini</option>
                    <option value="io">io</option>
                    <option value="ioke">ioke</option>
                    <option value="irc">irc</option>
                    <option value="jade">jade</option>
                    <option value="java">java</option>
                    <option value="js">js</option>
                    <option value="js+cheetah">js+cheetah</option>
                    <option value="js+django">js+django</option>
                    <option value="js+erb">js+erb</option>
                    <option value="js+genshitext">js+genshitext</option>
                    <option value="js+mako">js+mako</option>
                    <option value="js+myghty">js+myghty</option>
                    <option value="json">json</option>
                    <option value="jsp">jsp</option>
                    <option value="js+php">js+php</option>
                    <option value="js+smarty">js+smarty</option>
                    <option value="kotlin">kotlin</option>
                    <option value="lhs">lhs</option>
                    <option value="lighty">lighty</option>
                    <option value="llvm">llvm</option>
                    <option value="logtalk">logtalk</option>
                    <option value="lua">lua</option>
                    <option value="make">make</option>
                    <option value="mako">mako</option>
                    <option value="maql">maql</option>
                    <option value="mason">mason</option>
                    <option value="matlab">matlab</option>
                    <option value="matlabsession">matlabsession</option>
                    <option value="minid">minid</option>
                    <option value="modelica">modelica</option>
                    <option value="modula2">modula2</option>
                    <option value="moocode">moocode</option>
                    <option value="moon">moon</option>
                    <option value="mupad">mupad</option>
                    <option value="mxml">mxml</option>
                    <option value="myghty">myghty</option>
                    <option value="mysql">mysql</option>
                    <option value="nasm">nasm</option>
                    <option value="nemerle">nemerle</option>
                    <option value="newlisp">newlisp</option>
                    <option value="newspeak">newspeak</option>
                    <option value="nginx">nginx</option>
                    <option value="nimrod">nimrod</option>
                    <option value="numpy">numpy</option>
                    <option value="objdump">objdump</option>
                    <option value="objective-c">objective-c</option>
                    <option value="objective-j">objective-j</option>
                    <option value="ocaml">ocaml</option>
                    <option value="octave">octave</option>
                    <option value="ooc">ooc</option>
                    <option value="opa">opa</option>
                    <option value="openedge">openedge</option>
                    <option value="perl">perl</option>
                    <option value="php">php</option>
                    <option value="plpgsql">plpgsql</option>
                    <option value="postgresql">postgresql</option>
                    <option value="postscript">postscript</option>
                    <option value="pot">pot</option>
                    <option value="pov">pov</option>
                    <option value="powershell">powershell</option>
                    <option value="prolog">prolog</option>
                    <option value="properties">properties</option>
                    <option value="protobuf">protobuf</option>
                    <option value="psql">psql</option>
                    <option value="py3tb">py3tb</option>
                    <option value="pycon">pycon</option>
                    <option value="pypylog">pypylog</option>
                    <option value="pytb">pytb</option>
                    <option value="python">python</option>
                    <option value="python3">python3</option>
                    <option value="ragel">ragel</option>
                    <option value="ragel-c">ragel-c</option>
                    <option value="ragel-cpp">ragel-cpp</option>
                    <option value="ragel-d">ragel-d</option>
                    <option value="ragel-em">ragel-em</option>
                    <option value="ragel-java">ragel-java</option>
                    <option value="ragel-objc">ragel-objc</option>
                    <option value="ragel-ruby">ragel-ruby</option>
                    <option value="raw">raw</option>
                    <option value="rb">rb</option>
                    <option value="rbcon">rbcon</option>
                    <option value="rconsole">rconsole</option>
                    <option value="rebol">rebol</option>
                    <option value="redcode">redcode</option>
                    <option value="rhtml">rhtml</option>
                    <option value="rst">rst</option>
                    <option value="sass">sass</option>
                    <option value="scala">scala</option>
                    <option value="scaml">scaml</option>
                    <option value="scheme">scheme</option>
                    <option value="scilab">scilab</option>
                    <option value="scss">scss</option>
                    <option value="smalltalk">smalltalk</option>
                    <option value="smarty">smarty</option>
                    <option value="sml">sml</option>
                    <option value="snobol">snobol</option>
                    <option value="sourceslist">sourceslist</option>
                    <option value="splus">splus</option>
                    <option value="sql">sql</option>
                    <option value="sqlite3">sqlite3</option>
                    <option value="squidconf">squidconf</option>
                    <option value="ssp">ssp</option>
                    <option value="sv">sv</option>
                    <option value="tcl">tcl</option>
                    <option value="tcsh">tcsh</option>
                    <option value="tea">tea</option>
                    <option value="tex">tex</option>
                    <option value="text">text</option>
                    <option value="trac-wiki">trac-wiki</option>
                    <option value="urbiscript">urbiscript</option>
                    <option value="v">v</option>
                    <option value="vala">vala</option>
                    <option value="vb.net">vb.net</option>
                    <option value="velocity">velocity</option>
                    <option value="vhdl">vhdl</option>
                    <option value="vim">vim</option>
                    <option value="xml">xml</option>
                    <option value="xml+cheetah">xml+cheetah</option>
                    <option value="xml+django">xml+django</option>
                    <option value="xml+erb">xml+erb</option>
                    <option value="xml+evoque">xml+evoque</option>
                    <option value="xml+mako">xml+mako</option>
                    <option value="xml+myghty">xml+myghty</option>
                    <option value="xml+php">xml+php</option>
                    <option value="xml+smarty">xml+smarty</option>
                    <option value="xml+velocity">xml+velocity</option>
                    <option value="xquery">xquery</option>
                    <option value="xslt">xslt</option>
                    <option value="yaml">yaml</option>
                </select>
                
                <label>{t}Expiration{/t}</label>
                <select class="span2" name="expire">
                    <option value="-1" selected>Never</option>
                    <option value="7776000">90d</option>
                    <option value="259200">3d</option>
                    <option value="86400">24h</option>
                    <option value="3600">1h</option>
                </select>
                
                <label>{t}<b>Code:</b> To ensure legibility, keep your code lines under 80 characters long. Include comments to indicate what you need feedback on.{/t}</label>
                <textarea name="code"></textarea>
                
                <!--<label>{t}Load text from a file{/t}</label>
                <input type="file" name="upload"/>-->
                
                <label>
                    {t}Create this paste as a non-public (hidden) paste{/t}
                    <input type="checkbox" name="hidden" value=1 />
                </label>
                
                <label>
                    {t}Wrap text at 78 characters{/t}
                    <input type="checkbox" name="wrap" value=1 />
                </label>
                
                <label></label>
                <input class="btn btn-primary" type="submit" value="{t}Send{/t}"/>
                <input class="btn" type="reset" value="{t}Cancel{/t}"/>
            </form>
        </div>
{include file='footer.tpl'}
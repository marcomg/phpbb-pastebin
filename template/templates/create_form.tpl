{include file='header.tpl'}
        <div class="container">
            <form class="form-horizontal" action = "index.php?q=create" method = "post">
                <h2 class="form-signin-heading">{t}Paste zone{/t}</h2>
                
                <label>{t}Language{/t}</label>
                <select class="span2" name="lang">
                    <option value="4cs">GADV 4CS</option>
                    <option value="6502acme">MOS 6502 (6510) ACME Cross Assembler format</option>
                    <option value="6502kickass">MOS 6502 (6510) Kick Assembler format</option>
                    <option value="6502tasm">MOS 6502 (6510) TASM/64TASS 1.46 Assembler format</option>
                    <option value="68000devpac">Motorola 68000 - HiSoft Devpac ST 2 Assembler format</option>
                    <option value="abap">ABAP</option>
                    <option value="actionscript">ActionScript</option>
                    <option value="actionscript3">ActionScript 3</option>
                    <option value="ada">Ada</option>
                    <option value="aimms">AIMMS3</option>
                    <option value="algol68">ALGOL 68</option>
                    <option value="apache">Apache configuration</option>
                    <option value="applescript">AppleScript</option>
                    <option value="apt_sources">Apt sources</option>
                    <option value="arm">ARM ASSEMBLER</option>
                    <option value="asm">ASM</option>
                    <option value="asp">ASP</option>
                    <option value="asymptote">asymptote</option>
                    <option value="autoconf">Autoconf</option>
                    <option value="autohotkey">Autohotkey</option>
                    <option value="autoit">AutoIt</option>
                    <option value="avisynth">AviSynth</option>
                    <option value="awk">awk</option>
                    <option value="bascomavr">BASCOM AVR</option>
                    <option value="bash">Bash</option>
                    <option value="basic4gl">Basic4GL</option>
                    <option value="bf">Brainfuck</option>
                    <option value="bibtex">BibTeX</option>
                    <option value="blitzbasic">BlitzBasic</option>
                    <option value="bnf">bnf</option>
                    <option value="boo">Boo</option>
                    <option value="c">C</option>
                    <option value="c_loadrunner">C (LoadRunner)</option>
                    <option value="c_mac">C (Mac)</option>
                    <option value="c_winapi">C (WinAPI)</option>
                    <option value="caddcl">CAD DCL</option>
                    <option value="cadlisp">CAD Lisp</option>
                    <option value="cfdg">CFDG</option>
                    <option value="cfm">ColdFusion</option>
                    <option value="chaiscript">ChaiScript</option>
                    <option value="cil">CIL</option>
                    <option value="clojure">Clojure</option>
                    <option value="cmake">CMake</option>
                    <option value="cobol">COBOL</option>
                    <option value="coffeescript">CoffeeScript</option>
                    <option value="cpp">C++</option>
                    <option value="cpp-qt" class="sublang">&nbsp;&nbsp;C++ (Qt)</option>
                    <option value="cpp-winapi" class="sublang">&nbsp;&nbsp;C++ (WinAPI)</option>
                    <option value="csharp">C#</option>
                    <option value="css">CSS</option>
                    <option value="cuesheet">Cuesheet</option>
                    <option value="d">D</option>
                    <option value="dcl">DCL</option>
                    <option value="dcpu16">DCPU-16 Assembly</option>
                    <option value="dcs">DCS</option>
                    <option value="delphi">Delphi</option>
                    <option value="diff">Diff</option>
                    <option value="div">DIV</option>
                    <option value="dos">DOS</option>
                    <option value="dot">dot</option>
                    <option value="e">E</option>
                    <option value="ecmascript">ECMAScript</option>
                    <option value="eiffel">Eiffel</option>
                    <option value="email">eMail (mbox)</option>
                    <option value="epc">EPC</option>
                    <option value="erlang">Erlang</option>
                    <option value="euphoria">Euphoria</option>
                    <option value="ezt">EZT</option>
                    <option value="f1">Formula One</option>
                    <option value="falcon">Falcon</option>
                    <option value="fo">FO (abas-ERP)</option>
                    <option value="fortran">Fortran</option>
                    <option value="freebasic">FreeBasic</option>
                    <option value="freeswitch">FreeSWITCH</option>
                    <option value="fsharp">F#</option>
                    <option value="gambas">GAMBAS</option>
                    <option value="gdb">GDB</option>
                    <option value="genero">genero</option>
                    <option value="genie">Genie</option>
                    <option value="gettext">GNU Gettext</option>
                    <option value="glsl">glSlang</option>
                    <option value="gml">GML</option>
                    <option value="gnuplot">Gnuplot</option>
                    <option value="go">Go</option>
                    <option value="groovy">Groovy</option>
                    <option value="gwbasic">GwBasic</option>
                    <option value="haskell">Haskell</option>
                    <option value="haxe">Haxe</option>
                    <option value="hicest">HicEst</option>
                    <option value="hq9plus">HQ9+</option>
                    <option value="html4strict">HTML</option>
                    <option value="html5">HTML5</option>
                    <option value="icon">Icon</option>
                    <option value="idl">Uno Idl</option>
                    <option value="ini">INI</option>
                    <option value="inno">Inno</option>
                    <option value="intercal">INTERCAL</option>
                    <option value="io">Io</option>
                    <option value="ispfpanel">ISPF Panel</option>
                    <option value="j">J</option>
                    <option value="java">Java</option>
                    <option value="java5">Java(TM) 2 Platform Standard Edition 5.0</option>
                    <option value="javascript">Javascript</option>
                    <option value="jcl">JCL</option>
                    <option value="jquery">jQuery</option>
                    <option value="kixtart">KiXtart</option>
                    <option value="klonec">KLone C</option>
                    <option value="klonecpp">KLone C++</option>
                    <option value="latex">LaTeX</option>
                    <option value="lb">Liberty BASIC</option>
                    <option value="ldif">LDIF</option>
                    <option value="lisp">Lisp</option>
                    <option value="llvm">LLVM Intermediate Representation</option>
                    <option value="locobasic">Locomotive Basic</option>
                    <option value="logtalk">Logtalk</option>
                    <option value="lolcode">LOLcode</option>
                    <option value="lotusformulas">Lotus Notes @Formulas</option>
                    <option value="lotusscript">LotusScript</option>
                    <option value="lscript">LScript</option>
                    <option value="lsl2">LSL2</option>
                    <option value="lua">Lua</option>
                    <option value="m68k">Motorola 68000 Assembler</option>
                    <option value="magiksf">MagikSF</option>
                    <option value="make">GNU make</option>
                    <option value="mapbasic">MapBasic</option>
                    <option value="matlab">Matlab M</option>
                    <option value="mirc">mIRC Scripting</option>
                    <option value="mmix">MMIX</option>
                    <option value="modula2">Modula-2</option>
                    <option value="modula3">Modula-3</option>
                    <option value="mpasm">Microchip Assembler</option>
                    <option value="mxml">MXML</option>
                    <option value="mysql">MySQL</option>
                    <option value="nagios">Nagios</option>
                    <option value="netrexx">NetRexx</option>
                    <option value="newlisp">newlisp</option>
                    <option value="nginx">nginx</option>
                    <option value="nsis">NSIS</option>
                    <option value="oberon2">Oberon-2</option>
                    <option value="objc">Objective-C</option>
                    <option value="objeck">Objeck Programming Language</option>
                    <option value="ocaml">OCaml</option>
                    <option value="ocaml-brief" class="sublang">&nbsp;&nbsp;OCaml (brief)</option>
                    <option value="octave">GNU/Octave</option>
                    <option value="oobas">OpenOffice.org Basic</option>
                    <option value="oorexx">ooRexx</option>
                    <option value="oracle11">Oracle 11 SQL</option>
                    <option value="oracle8">Oracle 8 SQL</option>
                    <option value="oxygene">Oxygene (Delphi Prism)</option>
                    <option value="oz">OZ</option>
                    <option value="parasail">ParaSail</option>
                    <option value="parigp">PARI/GP</option>
                    <option value="pascal">Pascal</option>
                    <option value="pcre">PCRE</option>
                    <option value="per">per</option>
                    <option value="perl">Perl</option>
                    <option value="perl6">Perl 6</option>
                    <option value="pf">OpenBSD Packet Filter</option>
                    <option value="php">PHP</option>
                    <option value="php-brief" class="sublang">&nbsp;&nbsp;PHP (brief)</option>
                    <option value="pic16">PIC16</option>
                    <option value="pike">Pike</option>
                    <option value="pixelbender">Pixel Bender 1.0</option>
                    <option value="pli">PL/I</option>
                    <option value="plsql">PL/SQL</option>
                    <option value="postgresql">PostgreSQL</option>
                    <option value="povray">POVRAY</option>
                    <option value="powerbuilder">PowerBuilder</option>
                    <option value="powershell">PowerShell</option>
                    <option value="proftpd">ProFTPd configuration</option>
                    <option value="progress">Progress</option>
                    <option value="prolog">Prolog</option>
                    <option value="properties">PROPERTIES</option>
                    <option value="providex">ProvideX</option>
                    <option value="purebasic">PureBasic</option>
                    <option value="pycon">Python (console mode)</option>
                    <option value="pys60">Python for S60</option>
                    <option value="python">Python</option>
                    <option value="q">q/kdb+</option>
                    <option value="qbasic">QBasic/QuickBASIC</option>
                    <option value="rails">Rails</option>
                    <option value="rebol">REBOL</option>
                    <option value="reg">Microsoft Registry</option>
                    <option value="rexx">rexx</option>
                    <option value="robots">robots.txt</option>
                    <option value="rpmspec">RPM Specification File</option>
                    <option value="rsplus">R / S+</option>
                    <option value="ruby">Ruby</option>
                    <option value="sas">SAS</option>
                    <option value="scala">Scala</option>
                    <option value="scheme">Scheme</option>
                    <option value="scilab">SciLab</option>
                    <option value="scl">SCL</option>
                    <option value="sdlbasic">sdlBasic</option>
                    <option value="smalltalk">Smalltalk</option>
                    <option value="smarty">Smarty</option>
                    <option value="spark">SPARK</option>
                    <option value="sparql">SPARQL</option>
                    <option value="sql">SQL</option>
                    <option value="stonescript">StoneScript</option>
                    <option value="systemverilog">SystemVerilog</option>
                    <option value="tcl">TCL</option>
                    <option value="teraterm">Tera Term Macro</option>
                    <option value="text" selected>Text</option>
                    <option value="thinbasic">thinBasic</option>
                    <option value="tsql">T-SQL</option>
                    <option value="typoscript">TypoScript</option>
                    <option value="unicon">Unicon (Unified Extended Dialect of Icon)</option>
                    <option value="upc">UPC</option>
                    <option value="urbi">Urbi</option>
                    <option value="uscript">Unreal Script</option>
                    <option value="vala">Vala</option>
                    <option value="vb">Visual Basic</option>
                    <option value="vbnet">vb.net</option>
                    <option value="vbscript">VBScript</option>
                    <option value="vedit">Vedit macro language</option>
                    <option value="verilog">Verilog</option>
                    <option value="vhdl">VHDL</option>
                    <option value="vim">Vim Script</option>
                    <option value="visualfoxpro">Visual Fox Pro</option>
                    <option value="visualprolog">Visual Prolog</option>
                    <option value="whitespace">Whitespace</option>
                    <option value="whois">Whois (RPSL format)</option>
                    <option value="winbatch">Winbatch</option>
                    <option value="xbasic">XBasic</option>
                    <option value="xml">XML</option>
                    <option value="xorg_conf">Xorg configuration</option>
                    <option value="xpp">X++</option>
                    <option value="yaml">YAML</option>
                    <option value="z80">ZiLOG Z80 Assembler</option>
                    <option value="zxbasic">ZXBasic</option>
                </select>
                
                <label>{t}Expiration{/t}</label>
                <select class="span2" name="expire">
                    <option value="-1" selected>{t}Never{/t}</option>
                    <option value="7776000">90d</option>
                    <option value="259200">3d</option>
                    <option value="86400">24h</option>
                    <option value="3600">1h</option>
                </select>
                
                <label>{t}<b>Code:</b> To ensure legibility, keep your code lines under 80 characters long. Include comments to indicate what you need feedback on.{/t}</label>
                <textarea name="code" rows="6" class="span6"></textarea>
                
                
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
<h1> Installing DNAmixtures </h1>
<div id="installDNAmixtures">
<dl>
<dt>1) Hugin API</dt>
<dd>
   To install <span class="rpkg">DNAmixturesLite</span> you need the <a href="https://www.hugin.com">Hugin API</a> available on your system. 
  If you do not have a license for Hugin, you can opt for the demo version of <span class="rpkg">DNAmixtures</span>, <a href="?page=DNAmixturesLite"><span class="rpkg">DNAmixturesLite</span></a>.
  </dd>
  <dt>2) R</dt>
  <dd>
  Install the statistical software <a href="https://cran.r-project.org/">R</a>. A popular integrated development environment (IDE) for R is <a href="https://posit.co/products/open-source/rstudio/">RStudio</a>.
  </dd>
  <dt>3) Rtools (Required on Windows only)</dt>
  <dd>
   Download and install <a href="http://cran.r-project.org/bin/windows/Rtools/">Rtools</a>.
  Accept all the defaults, in particular that Cygwin dlls are installed
  and that the PATH variable is changed. 
  </dd>
  <dt>4) R packages</dt>
  <dd>
Now install R packages from within R (or RStudio) as follows:
<?php include "installmanCreator.html"?>
  </dd>
</dl>
</div>

<h2> Getting started </h2>

<p>The package help page contains the most essential information about the model as
well as an example analysis.</p>

<div class="chunk" id="installDNAmixtures"><div class="rcode"><div class="source"><pre class="knitr r"><span class="hl kwd">library</span><span class="hl std">(DNAmixtures)</span> <span class="hl com">## load the package</span>
<span class="hl kwd">help</span><span class="hl std">(DNAmixtures)</span>    <span class="hl com">## main help page </span>
</pre></div>
</div></div>

<p>More example analyses can be found under <a href="?page=tutorial">Tutorials</a>.</p>

<h1> Hugin: Efficient computations in Bayesian networks </h1>

<p> When a hypothesis includes any unknown contributors, there is a
need for summation over a large number of possible allocations of
genotypes. Our implementation relies on the <a href =
"https://www.hugin.com">Hugin</a> software for performing such
computations. </p>

<p>Hugin is solely used for performing computations on the Bayesian
networks created by <span class="rpkg">DNAmixtures</span> and, in
principle, any other such engine for Bayesian networks could be used
in place of Hugin. In <span class="rpkg">DNAmixturesLite</span>, we
make use of this design feature and replace Hugin by the open-source engine <a href="https://petergreenweb.wordpress.com/graven/"><span
class="rpkg">gRaven</span></a>.</p>

<h2>The RHugin package: an API for working with Hugin in R</h2>

<p> <span class="rpkg">DNAmixtures</span> calls Hugin through the API
provided in the <a href ="https://github.com/huginexpert/RHugin"><span
class="rpkg">RHugin</span></a> package, meaning that the user can
easily manipulate the Bayesian networks directly from R. 

<h2>Which Hugin license do I need?</h3>
<p><span
class="rpkg">DNAmixtures</span> has been developed using a Hugin
Researcher license and relies on the Hugin C API. The package should
also be compatible with e.g. Hugin Developer, which provides the full
Hugin C API with no limitations in network size, though this has not
been tested.</p>

<p> <span class="rpkg">DNAmixtures</span> may, in principle, be installed with the
free version of Hugin, HuginLite, though due to a limitation in the
size of networks allowed by the free version, in practice this will
restrict the functionality in <span class="rpkg">DNAmixtures</span> to
mixtures with no unknown contributors. We recommend users witout a full Hugin license to install instead <a href="?page=DNAmixturesLite"><span class="rpkg">DNAmixturesLite</span></a>.</p>




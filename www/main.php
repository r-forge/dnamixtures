<?php $pageHeader=" Statistical analysis of DNA mixtures with artefacts"; ?>

<p>
<span class="rpkg">DNAmixtures</span> is a statistical framework for analysis of DNA samples
  from one or multiple donors. It implements the statistical
  model introduced in <a href
  = "https://doi.org/10.1111/rssc.12071"
  class="papertitle"> Analysis of Forensic DNA mixtures with
  Artefacts</a> (published with discussion in Journal of the
  Royal Statistical Society, series C).
</p>

<p>
<span class="rpkg">DNAmixtures</span> has been used to give evidence in several cases in both Denmark and the United Kingdom. Contact <a href="mailto:thgr@itu.dk">Therese Graversen</a> for inquiries related to the use of <span class="rpkg">DNAmixtures</span> in criminal casework.
</p>

<img src="graphics/screenshot.png" id="screenshot" alt="Screenshot of DNAmixtures in the R GUI"></img>

<div id="featurelist">
<dl>
<dt>Common forensic applications</dt>
<dd>Computation of likelihood ratios</dd>
<dd>Deconvolution of the DNA mixture</dd>
<dd>Combined analysis of multiple traces of DNA</dd>
</dl>

<dl>
<dt>Visual assessment of the statistical modelling</dt>
<dd>Does the hypothesis explain the data well?</dd>
<dd>Is the distribution of peak heights adequate?</dd>
</dl>

<dl> <dt>Efficient exact computation</dt>
<dd>Runs on a standard desktop or laptop</dd> 
<dd>Allows a higher number of contributors </dd> 
</dl>

<dl>
<dt>A complete statistical framework</dt>
<dd>Exact computation of the likelihood function</dd>
<dd>Maximum likelihood estimation of parameters</dd>
<dd>Simulation of genotypes and peak heights</dd>
<dd>Access to various conditional distributions of peak
  heights given data</dd>
</dl>
</div>

<div style="clear:both"></div>



<div id="reqAndInstall">
<h3>System requirements</h3>
<p>
<span class="rpkg">DNAmixtures</span> may be installed on any system
(Windows, Linux, or MacOS), on which the following three programs are
installed:</p>
<table>
  <tr>
    <th><a class="reqtitle"
    href="https://www.r-project.org">R</a></th><td>Statistical
    software</td>
  </tr>
  <tr>
    <th><a class="reqtitle"
    href="https://www.hugin.com">Hugin</a></th><td>Bayesian network software</td>
  </tr>
  <tr>
    <th><a class="reqtitle"
    href="https://github.com/huginexpert/RHugin">RHugin</a></th><td>API
    for calling Hugin from within R</td>
  </tr>
</table>
<p> For an installation guide, please see <a href="?page=installation">the installation page</a>.</p>
</div>

<div id="liteannouncement">
 <h3>Now available: Hugin-free lite-version of <span class="rpkg">DNAmixtures</span></h3>

 <p>The <span class="rpkg">DNAmixturesLite</span> package is intended as a service to enable users to try <span class="rpkg">DNAmixtures</span> without purchasing a commercial licence for Hugin. When at all possible, we strongly recommend the use of <span class="rpkg">DNAmixtures</span> rather than its lite-version. While the lite-version seeks to provide the full functionality of <span class="rpkg">DNAmixtures</span>, note that computations are much less efficient and that there are some differences in available functionality.</p>
 <a href="?page=DNAmixturesLite" class="button"><span class="rpkg">DNAmixturesLite</span></a> 
</div>

<p> Questions and comments are very welcome and can be directed to the
  author, <a href="mailto:thgr@itu.dk">Therese
  Graversen</a>.</p>


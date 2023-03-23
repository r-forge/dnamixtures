<h1>DNAmixturesLite</h1>

<p>
<span class="rpkg">DNAmixturesLite</span> is developed to enable users, who do not have a commercial license for Hugin, to experiment with the methodology provided in <span class="rpkg">DNAmixtures</span>.
</p>
<h2>Installation</h2>

<p><span class="rpkg">DNAmixturesLite</span> only requires that R has already been installed.</p>

<p>From within R, run the following commands to install <span class="rpkg">DNAmixturesLite</span> and its dependencies.</p>
<p class="code">
## Dependencies from Bioconductor </br>
if (!require("BiocManager", quietly = TRUE)) install.packages("BiocManager")</br>
BiocManager::install(c("graph", "Rgraphviz", "RBGL"))</br>
</br>
install.packages("DNAmixturesLite")</br>
</p>

<h2>Key differences between DNAmixtures and its lite-version</h2>

<p>To appear</p>
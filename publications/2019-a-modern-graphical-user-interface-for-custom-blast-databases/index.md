---
title: 'Sequenceserver: A Modern Graphical User Interface for Custom BLAST Databases'
layout: publication
permalink: /publications/modern-graphical-user-interface-for-custom-blast-databases/
---

<br />

<p class="info-text">Published: 14 August 2019</p>

# Sequenceserver: A Modern Graphical User Interface for Custom BLAST Databases

<h5 class="info-text my-4">Anurag Priyam, Ben J Woodcroft, Vivek Rai, Ismail Moghul, Alekhya Munagala, Filip Ter, Hiten Chowdhary, Iwo Pieniak, Lawrence J Maynard, Mark Anthony Gibbins, HongKee Moon, Austin Davis-Richardson, Mahmut Uludag, Nathan S Watson-Haigh, Richard Challis, Hiroyuki Nakamura, Emeline Favreau, Esteban A Gómez, Tomás Pluskal, Guy Leonard, Wolfgang Rumpf, Yannick Wurm</h5>

[*Molecular Biology and Evolution*](https://doi.org/10.1093/molbev/msz185), Volume 36, Issue 12, December 2019, Pages 2922–2924

<br />

## Abstract
<hr />

Comparing newly obtained and previously known nucleotide and amino-acid sequences underpins modern biological research. BLAST is a well-established tool for such comparisons but is challenging to use on new data sets. We combined a user-centric design philosophy with sustainable software development approaches to create Sequenceserver, a tool for running BLAST and visually inspecting BLAST results for biological interpretation. Sequenceserver uses simple algorithms to prevent potential analysis errors and provides flexible text-based and visual outputs to support researcher productivity. Our software can be rapidly installed for use by individuals or on shared servers.

<br />

## Introduction
<hr />

The dramatic drop in sequencing costs has created many opportunities for individuals and groups of researchers to generate genomic or transcriptomic sequences from previously understudied organisms. Many research questions require small- or large-scale sequence comparisons, and BLAST (Basic Local Alignment Search Tool) is the most established tool for many such analyses (<span class="info-text">Altschul et al. 1990</span>; <span class="info-text">Camacho et al. 2009</span>). Unfortunately, BLAST analysis of new data can be challenging. There are delays before new data are submitted to and become publicly available on central BLAST repositories such as the NCBI (National Center for Biotechnology Information), and only small queries are feasible on such repositories. BLAST can be downloaded and installed locally, but its usage can be challenging for researchers without experience of command-line interfaces. Finally, commercial software to overcome such hurdles is too costly for many laboratories.

Here, we present Sequenceserver, a free graphical interface for BLAST designed to increase the productivity of biologist researchers performing and interpreting BLAST searches on custom data sets, and of bioinformaticians setting up shared laboratory or community databases. It has a user-centric focus (<span class="info-text">Garrett 2011</span>) on accompanying researchers through their work process. Below, we provide an overview of Sequenceserver features that facilitate BLAST query submission and interpretation.

<br />

## Assisted Installation and BLAST Query Submission
<hr />

Installing Sequenceserver on computers running macOS or Linux is typically rapid, requiring only one or few commands (see online documentation). If necessary, Sequenceserver automates the download of BLAST (<span class="info-text">Camacho et al. 2009</span>) binaries and can manage the conversion of FASTA files to BLAST databases. A user accesses Sequenceserver’s graphical interface in a web browser at <span class="info-text">http://localhost:4567</span> (<span class="info-text">fig. 1A</span>). All detected BLAST databases are automatically listed here. The user types, pastes or drag-and-drops FASTA format query sequences into a text-field (<span class="info-text">fig. 1A</span>). To prevent common errors, an alert message is shown and query submission is disabled if the query is invalid (e.g., combining nucleotide and protein sequences). The user then selects databases. The appropriate basic BLAST algorithm will automatically be used (<span class="info-text">supplementary fig. S1</span>, <span class="info-text">Supplementary Material</span> online). When multiple algorithms are appropriate, a pull-down in the BLAST submission button allows the user to toggle between them. An “advanced parameters” field provides access to all standard BLAST parameters.

<div class="publication-image mb-3">
  <h5><em>Figure 1</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/partial-screenshot-of-the-query-interface.webp" />
    <img src="/img/publications/partial-screenshot-of-the-query-interface.jpeg" width="1092" height="538" alt="Partial screenshot of the query interface" />
  </picture>
  <p class="mt-2">
    (<em>A</em>) Partial screenshot of the query interface. Numbers circled in red highlight the steps involved and some specific features. (1) Three or more sequences were pasted into the query field (typewriter font; only the identifier is visible for the third sequence); a message confirms to the user that these are amino acid sequences. (2) The Swiss-Prot protein database was the first database to be selected. As a result, additional database selections are limited to protein databases; nucleotide databases are disabled. (3) Optional advanced parameters were entered which constrain the results to the ten strongest hits with <em>E</em>-values stronger than 10<sup>−10</sup>. (4) The BLAST button is automatically activated and labeled “BlastP” as this is the only possible basic BLAST algorithm for the given query-database combination. As the user’s mouse pointer hovers over the BlastP button, a tooltip indicates that a keyboard shortcut exists for this button. (<em>B</em>) Partial screenshot of a Sequenceserver BLAST report. An interactive version of this figure is online at <a href="https://sequenceserver.com/paper/resultsinteractive/" target="_blank">sequenceserver.com/paper/resultsinteractive</a> (last accessed August 25, 2019). Three amino acid sequences were compared against the Swiss-Prot database using BlastP with an E-value cutoff of 10<sup>−10</sup> and keeping only the ten strongest hits per query. This screenshot shows a portion of the results for the first query. Numbers circled in red highlight some specific features of this report. (1) An index overview summarizes the query and database information and provides clickable links to query-specific results. (2) Results for the first query are shown. These include a graphical overview indicating which parts of the query sequence align to each hit, a tabular summary of all hits, and alignment details for each hit. (3) The first hit is selected for download; its alignment details have been folded away. (4) The user is studying the second hit; the mouse pointer hovers over the link to the hit’s UniProt page. (<em>C</em>) Sequenceserver usage as of June 11, 2019. These include download statistics from <a href="https://rubygems.org/gems/sequenceserver" target="_blank">https://rubygems.org/gems/sequenceserver</a>, Google Analytics statistics for <a href="https://sequenceserver.com/" target="_blank">sequenceserver.com</a>, and citation statistics from <a href="https://app.dimensions.ai/details/publication/pub.1085102830" target="_blank">https://app.dimensions.ai/details/publication/pub.1085102830</a>, and GitHub statistics from <a href="https://github.com/wurmlab/sequenceserver" target="_blank">https://github.com/wurmlab/sequenceserver</a>.
  </p>
</div>

<br />

## BLAST Result Visualization and Further Analysis
<hr />

The Sequenceserver results page is designed to facilitate navigation, interpretation, and follow-up analysis (<span class="info-text">fig. 1B</span> and [sequenceserver.com/paper/resultsinteractive](https://sequenceserver.com/paper/resultsinteractive/){:target="_blank"}; last accessed August 25, 2018). Results are visually structured and will feel familiar to users of NCBI BLAST. If multiple query sequences were submitted, a clickable index of queries is shown. Queries, hits, and BLAST HSPs (high-scoring segment pairs) are numbered to facilitate navigation. For each query, identified hits are summarized in a table and an overview graphic. Each hit includes links for FASTA download, sequence visualization, and potentially to other resources. Such links can be automatically added based on regular expression analysis of identifiers (see online documentation). BLAST results can be downloaded in XML or tab-delimited table formats for further analysis. Similarly, a FASTA file containing all hit sequences, or a selection of hit sequences can be downloaded.

<br />

## Usage by Individual Researchers and as Part of Community Databases
<hr />

Usage statistics including downloads, preprint citations, GitHub, and mailing list participation (<span class="info-text">fig. 1C</span>) indicate that Sequenceserver is extensively used for molecular-genetic research on emerging model organisms (<span class="info-text">supplementary table S1</span>, <span class="info-text">Supplementary Material</span> online). For example, Sequenceserver installations on personal computers helped characterize the evolution of tunicate genomes (<span class="info-text">Blanchoud et al. 2018</span>), fire ant olfactory genes (<span class="info-text">Pracana et al. 2017</span>), and loci affecting Sorghum shoot architecture (<span class="info-text">McCormick et al. 2016</span>). Sequenceserver has also been used to analyze human prostate cancer genomes (<span class="info-text">Seim et al. 2017</span>) and to identify bacteria affecting shelf life of milk (<span class="info-text">Reichler et al. 2018</span>).

Importantly, Sequenceserver also represents a main querying mechanism for more than 50 community genome databases (<span class="info-text">supplementary table S2</span>, <span class="info-text">Supplementary Material</span> online), including the PHI-base database of genes underpinning pathogen–host interactions (<span class="info-text">Winnenburg et al. 2006</span>), an initiative to sequence 1,000 wild yeast genomes (<span class="info-text">Shen et al. 2016</span>), and the [http://reefgenomics.org](//reefgenomics.org){:target="_blank"} coral genomics database; last accessed August 25, 2019 (<span class="info-text">Liew et al. 2016</span>). Such community resources typically integrate Sequenceserver as part of larger web servers (e.g., Nginx [<span class="info-text">Reese 2008</span>]) and customize it by adding links from BLAST hits to genome browsers or other gene-specific information. Additionally, many password-protected Sequenceserver instances exist for unpublished data.

<br />

## Outlook <span class="info-text"></span>
<hr />

In creating Sequenceserver, we aimed to respect user-centric design principles, open-source, and sustainable software engineering practices (<span class="info-text">Supplementary Material</span> online). Our software is built using Ruby and Javascript frameworks commonly used for professional software development. The resulting robust architecture and flexibility facilitate customization and integration with other tools. This has led to contributions of improvements and bug-fixes by 21 bioinformaticians unrelated to the initial project; many are now coauthors. Our community is testing the ability to import preexisting BLAST or DIAMOND XML result files (<span class="info-text">Buchfink et al. 2015</span>), and new manners of visualizing results (<span class="info-text">Wintersinger and Wasmuth 2015</span>; <span class="info-text">Cui et al. 2016</span>). Such efforts will continue to improve the ability of researchers to analyze and interpret genomic data.

<br />

## Data Availability
<hr />

Source code is available under GNU Affero General Public License (AGPL) 3.0 at [https://github.com/sequenceserver](https://github.com/sequenceserver){:target="_blank"} (last accessed August 25, 2019). Additional documentation is available online at [sequenceserver.com](https://sequenceserver.com/){:target="_blank"} (last accessed August 25, 2019).

<br />

## Supplementary Material
<hr />

[Supplementary materials](https://oup.silverchair-cdn.com/oup/backfile/Content_public/Journal/mbe/36/12/10.1093_molbev_msz185/1/msz185_supplementary_data.pdf?Expires=1661585611&Signature=JwqYohXX0KbJEKEFfCrFaMWBxJPls0HhAvO~2IG7erZmgfdAVn9Hx3PCbbu4vNhMsD9nhLmRWQJ9tt-V4v4v-Y-RxoARFVkUIgWkYRC8WHTar1oZMlIa9tQMoHUzb20ehUitrXrlTS1BRGaHbRWugVISkqRod~LqrRbBwTyLHu606hIcS10PrLhc99otiCIOq4VzWq9KNa0COGM1PanA3Z9HOW96q~PXeNHalHTqTrmXN3gJtY2LFJ4R3EgHLM5Tdktzk4sCij~Hrxb-U7JsLFEzJKIM703GqMWiw6fo2XLgvUb2gySjPIfFhtXT93pIiLrSudFi5ahmr6ZkMq~6vA__&Key-Pair-Id=APKAIE5G5CRDK6RD3PGA){:target="_blank"} are available at *Molecular Biology and Evolution* online.

<br />

## Acknowledgments
<hr />

We thank the many Sequenceserver users and contributors for their input. During the creation of Sequenceserver, Y.W. was funded by a European Research Council grant to Laurent Keller. B.J.W. was supported by the United States Department of Energy (DE-SC0004632). While writing this manuscript, Y.W. and A.P. were supported by the Biotechnology and Biological Sciences Research Council (BB/K004204/1) and the Natural Environment Research Council (NE/L00626X/1).

<br />

## References
<hr />

1. Altschul SF, Gish W, Miller W, Myers EW, Lipman DJ. 1990. Basic Local Alignment Search Tool. *J Mol Biol.* 2153:403–410.

2. Blanchoud S, Rutherford K, Zondag L, Gemmell NJ, Wilson MJ. 2018. *De novo* draft assembly of the *Botrylloides leachii* genome provides further insight into tunicate evolution. *Sci Rep.* 81:5518.

3. Buchfink B, Xie C, Huson DH. 2015. Fast and sensitive protein alignment using DIAMOND. *Nat Methods.* 121:59–60.

4. Camacho C, Coulouris G, Avagyan V, Ma N, Papadopoulos J, Bealer K, Madden TL. 2009. BLAST+: architecture and applications. *BMC Bioinformatics* 10:421.

5. Cui Y, Chen X, Luo H, Fan Z, Luo J, He S, Yue H, Zhang P, Chen R. 2016. BioCircos.js: an interactive Circos JavaScript library for biological data visualization on web applications. *Bioinformatics* 3211:1740–1742.

6. Garrett JJ. 2011. *The elements of user experience: user-centered design for the Web and beyond*. Berkeley (CA): New Riders.

7. Liew YJ, Aranda M, Voolstra CR. 2016. Reefgenomics.org—a repository for marine genomics data. *Database* 2016:baw152.

8. McCormick RF, Truong SK, Mullet JE. 2016. 3D sorghum reconstructions from depth images identify QTL regulating shoot architecture. *Plant Physiol.* 1722:823–834.

9. Pracana R, Levantis I, Martínez-Ruiz C, Stolle E, Priyam A, Wurm Y. 2017. Fire ant social chromosomes: differences in number, sequence and expression of odorant binding proteins. *Evol Lett.* 14:199–210.

10. Reese W. 2008. Nginx: the high-performance web server and reverse proxy. *Linux J.* 173:2.

11. Reichler S, Trmčić A, Martin N, Boor K, Wiedmann M. 2018. *Pseudomonas fluorescens* group bacterial strains are responsible for repeat and sporadic postpasteurization contamination and reduced fluid milk shelf life. *J Dairy Sci.* 1019:7780.

12. Seim I, Jeffery PL, Thomas PB, Nelson CC, Chopin LK. 2017. Whole-genome sequence of the metastatic PC3 and LNCaP human prostate cancer cell lines. *G3 (Bethesda)* 76:1731–1741.

13. Shen XX, Zhou X, Kominek J, Kurtzman CP, Hittinger CT, Rokas A. 2016. Reconstructing the backbone of the *Saccharomycotina* yeast phylogeny using genome-scale data. *G3 (Bethesda)* 612:3927–3939.

14. Winnenburg R, Baldwin TK, Urban M, Rawlings C, Köhler J, Hammond-Kosack KE. 2006. PHI-base: a new database for pathogen host interactions. *Nucleic Acids Res.* 34(Database issue):D459–D464.

15. Wintersinger JA, Wasmuth JD. 2015. Kablammo: an interactive, web-based blast results visualizer. *Bioinformatics* 318:1305–1306.

<br />

## Author notes
<hr />

**Associate editor**: Michael Rosenberg

© The Author(s) 2019. Published by Oxford University Press on behalf of the Society for Molecular Biology and Evolution

This is an Open Access article distributed under the terms of the Creative Commons Attribution License ([creativecommons.org/licenses/by/4.0/](https://creativecommons.org/licenses/by/4.0/){:target="_blank"}), which permits unrestricted reuse, distribution, and reproduction in any medium, provided the original work is properly cited.

© The Author(s) 2019. Published by Oxford University Press on behalf of the Society for Molecular Biology and Evolution

<br />

## Supplementary data
<hr />

[msz185_Supplementary_Data](/publications/2019-a-modern-graphical-user-interface-for-custom-blast-databases/msz185_supplementary_data.pdf){:target="_blank"} - pdf file

<br />

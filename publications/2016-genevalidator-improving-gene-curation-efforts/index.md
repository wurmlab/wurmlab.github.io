---
title: 'GeneValidator: identify problems with protein-coding gene predictions'
layout: publication
permalink: /publications/genevalidator-improving-gene-curation-efforts/
---

<br />

<p class="info-text">Published: 18 January 2016</p>

# GeneValidator: identify problems with protein-coding gene predictions

<h5 class="info-text my-4">Monica-Andreea Drăgan, Ismail Moghul, Anurag Priyam, Claudio Bustos, Yannick Wurm</h5>

[*Bioinformatics*](https://doi.org/10.1093/bioinformatics/btw015), Volume 32, Issue 10, 15 May 2016, Pages 1559–1561

<br />

## Abstract
<hr />

**Summary**: Genomes of emerging model organisms are now being sequenced at very low cost. However, obtaining accurate gene predictions remains challenging: even the best gene prediction algorithms make substantial errors and can jeopardize subsequent analyses. Therefore, many predicted genes must be time-consumingly visually inspected and manually curated. We developed GeneValidator (GV) to automatically identify problematic gene predictions and to aid manual curation. For each gene, GV performs multiple analyses based on comparisons to gene sequences from large databases. The resulting report identifies problematic gene predictions and includes extensive statistics and graphs for each prediction to guide manual curation efforts. GV thus accelerates and enhances the work of biocurators and researchers who need accurate gene predictions from newly sequenced genomes.

**Availability and implementation**: GV can be used through a web interface or in the command-line. GV is open-source (AGPL), available at [https://wurmlab.github.io/tools/genevalidator](https://wurmlab.github.io/tools/genevalidator){:target="_blank"}.

**Contact**: [y.wurm@qmul.ac.uk](mailto:y.wurm@qmul.ac.uk)

**Supplementary information**: [Supplementary Data](/publications/2016-genevalidator-improving-gene-curation-efforts/btw015_Supplementary_Data.zip) are available at *Bioinformatics* online.

<br />

## Introduction
<hr />

The plummeting costs of DNA sequencing (<span class="info-text">Wetterstrand, 2015</span>) have made de novo genome sequencing accessible to individual laboratories and even researchers (<span class="info-text">Nygaard and Wurm, 2015</span>). However, identifying genes in a newly assembled genome remains challenging. Traditional gene prediction approaches involve either *ab initio* prediction via modelling of coding versus non-coding sequence or similarity-based prediction using independent sources. Relevant sources include protein-coding sequences from other organisms, or peptide or transcriptome sequences from the organism being studied. Modern algorithms combine both approaches (<span class="info-text">Cantarel et al., 2008</span>; <span class="info-text">Korf, 2004</span>; <span class="info-text">Stanke et al., 2008</span>). The recent ability of obtaining large amounts of RNA sequences at low cost (<span class="info-text">Hou et al., 2015</span>) has led to a dramatic improvement in the performance of similarity-based algorithms and thus gene prediction quality (<span class="info-text">Goodswen et al., 2012</span>) albeit only for expressed genes. Despite this, the accuracy of gene prediction tools (e.g. <span class="info-text">Alioto et al., 2013</span>; <span class="info-text">Cantarel et al., 2008</span>; <span class="info-text">Keller et al., 2011</span>; <span class="info-text">Lomsadze et al., 2014</span>; <span class="info-text">Wilkerson et al., 2006</span>) remains disappointing (<span class="info-text">Yandell and Ence, 2012</span>). Typical errors include missing exons, non-coding sequence retention in exons, fragmenting genes and merging neighboring genes. Automated gene prediction quality evaluation tools analyze exon boundaries (<span class="info-text">Eilbeck et al., 2009</span>; <span class="info-text">Yandell and Ence, 2012</span>) or focus on subsets of highly conserved genes (<span class="info-text">Parra et al., 2007</span>). Unfortunately, such tools ignore most of the information present in frequently updated databases such as SwissProt or Genbank NR. Visual analysis is thus required to identify errors and manual curation is needed to fix them. This requires tens of minutes to days for one gene (<span class="info-text">Howe et al., 2008</span>) – a daunting task when considering analyses of dozens of species each with thousands of genes (<span class="info-text">Pray, 2008</span>; <span class="info-text">Simola et al., 2013</span>).

We thus created GeneValidator (GV), a tool to evaluate quality of protein-coding gene predictions based on comparisons with similar known proteins from public and private databases. GV provides quality evaluations in text formats for automated analysis and in highly visual formats for inspection by researchers.

<br />

## Approach
<hr />

For each new gene prediction, BLAST (<span class="info-text">Camacho et al., 2009</span>) identifies similar sequences in Swiss-Prot (<span class="info-text">The UniProt Consortium, 2014</span>), Genbank NR (<span class="info-text">Benson et al., 2010</span>) or other relevant databases. Subsequently, GV performs up to seven comparisons between the gene prediction and the most highly significant hit sequences or high-scoring segment pairs (HSPs). The results of each comparison indicate whether characteristics of the query gene prediction deviate from those of hit sequences. The following four comparisons are performed on all queries:

**Length**: We compare the length of the query sequence to the lengths of the most significant BLAST hits using hierarchical clustering (<span class="info-text">Fig. 1a</span>, <span class="info-text">e</span>) and a rank test. A particularly low or high rank can suggest that the query is too short or too long.

<div class="publication-image mb-3">
  <h5><em>Fig. 1</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/contrasting-GV-graphs.webp" />
    <img src="/img/publications/contrasting-GV-graphs.jpeg" width="1092" height="342" alt="Contrasting GV graphs" />
  </picture>
  <p class="mt-2">
    Contrasting GV graphs: (<strong>a</strong>), (<strong>e</strong>) sequence lengths; (<strong>b</strong>), (<strong>f</strong>) HSP offsets; (<strong>c</strong>), (<strong>g</strong>) overviews of hit regions; (<strong>d</strong>), (<strong>h</strong>) conserved regions. Graphs (a–d) were produced with a sequence for which GV detected no problems. The other graphs show typical problems: (e) query is short; (f), (g) query sequence is a fusion of unrelated genes; (h): query includes sequence absent from first 10 hits
  </p>
</div>

**Coverage**: We determine whether hit regions match the query sequence more than once using a Wilcoxon test. Significance suggests that the query includes duplicated regions (e.g. resulting from merging of tandem gene duplicates).

**Conserved** regions: We align the query to a position specific scoring matrix profile derived from a multiple alignment of the ten most significant BLAST hits. This identifies potentially missing or extra regions (<span class="info-text">Fig. 1d</span>, <span class="info-text">h</span> and <span class="info-text">Supplementary Fig. S2</span>).

**Different genes**: Deviation from unimodality of HSP start and stop coordinates indicates that HSPs map to multiple regions of the query. If this is the case, we perform a linear regression between HSP start and stop coordinates, weighting data points proportionally to BLAST significance (see <span class="info-text">Fig. 1b, c, f, g</span>). Regression slopes between 0.4 and 1.2 (empirically chosen values) suggest that the query prediction combines two different genes (see <span class="info-text">Supplementary Fig. S1</span>).

Two additional analyses are performed on nucleotide queries:

**_Ab initio_ Open Reading Frame (ORF)**: We expect a single major ORF. Frameshifts, retained introns or merged genes can lead to presence of multiple major ORFs.

**Similarity-based ORFs**: We expect all BLAST hits to align within a single ORF. This test is more sensitive than the previous when a query has HSPs in multiple reading frames.

An additional analysis is performed for MAKER gene predictions:

**MAKER RNASeq Quality Index**: MAKER gene predictions include a quality index (in the FASTA defline) indicating the extent to which the prediction is supported by RNAseq evidence. GV considers this information when it is available.

Each analysis of each query returns a binary result (i.e. similar or different to BLAST hits) according to a P-value or an empirically determined cutoff. The results for each query are combined into an indicative overall quality score from 0 to 100. The scores allow comparing overall qualities of different gene sets, or identifying the highest- or lowest-quality gene predictions within a gene set.

The individual and global scores are provided in JSON and tab-delimited text formats, and as an HTML report that can be viewed in a web browser (<span class="info-text">Supplementary Fig. S3</span>). Importantly, this HTML report includes up to five graphs for each gene (<span class="info-text">Fig. 1</span>), as well as explanations of the analyses and results. These visualizations can be particularly useful to biocurators improving gene predictions.

<br />

## Usage
<hr />

GV is installed as a ruby gem (<span class="info-text">Bonnal et al., 2012</span>). The user provides FASTA protein or nucleotide gene predictions; BLAST is run remotely (NCBI) or on a local database, or the user provides an existing BLAST output. Alternatively, a web wrapper provides an elegant graphical interface and a programmatic jQuery API. Finally, GV can already be used from within the Afra genome annotation editor (Priyam et al. unpublished).

<br />

## Discussion
<hr />

GV’s power comes from leveraging large, frequently-updated databases, using multiple metrics, input/output format flexibility and importantly its multiple data visualization approaches. Indeed, visualization is crucial for understanding genomic comparisons (<span class="info-text">Nielsen et al., 2010</span>; <span class="info-text">Riba-Grognuz et al., 2011</span>).

The code underlying GV respects best practices in scientific software development (<span class="info-text">Wurm, 2015</span>). However, GV’s analyses depend on BLAST-identification of homologs in databases which include low-quality sequences, on expecting similar gene sequence and structure among homologs, and on empirically chosen cutoffs. Binary results of individual tests are thus indicative rather than infallible. Similarly, GV’s overall quality evaluations are not ground truths but indicate consistencies with database sequences.

We used two approaches to determine the appropriateness of GV’s scoring system. GV scores for 10 000 randomly selected Swissprot genes were significantly higher than GV scores for 10 000 randomly selected TrEMBL genes (<span class="info-text">Supplementary Fig. S4</span>). Similarly, 73–90% of recently updated gene models from four eukaryotic genomes had higher GV scores than older versions (<span class="info-text">Supplementary Table S1</span>; <span class="info-text">Supplementary Fig. S5</span>). Both results are consistent with GV appropriately quantifying gene prediction improvements due to manual curation or improved gene prediction technologies. Lower GV scores for some gene predictions could be due the reference databases containing sequences of low-quality, new automated predictions introducing new errors and scores being noisy for queries with few BLAST hits.

<br />

## Future work
<hr />

GV was developed with a plug-in system for adding validation approaches. We plan to extend GV with improved orthology detection, additional validation approaches (e.g. codon usage, explicit RNAseq support) and improved statistics (e.g. evidence-weighting based on phylogenetic and database-quality information). In its current form, GV already can save large amounts of time for biologists working with newly obtained gene predictions.

<br />

## Funding
<hr />

This work was supported by the Sciruby community, NESCent Google Summer of Code, the NESCent “Building non-model species genome curation communities” working group, Biotechnology and Biological Sciences Research Council [BB/K004204/1], Natural Environment Research Council [NE/L00626X/1, EOS Cloud] and QMUL Apocrita Midplus (EP/K000128/1).

*Conflict of Interest*: none declared.

<br />

## References
<hr />

1. Alioto T. et al. . (2013) ASPic-GeneID: a lightweight pipeline for gene prediction and alternative isoforms detection. *BioMed Res. Int.*, 2013, 502827.

2. Benson D.A. et al. . (2010) GenBank. *Nucleic Acids Res.*, 38, D46–D51.

3. Bonnal R.J. et al. . (2012) Biogem: an effective tool-based approach for scaling up open source software development in bioinformatics. *Bioinformatics*, 28, 1035–1037.

4. Camacho C. et al. . (2009) BLAST+: architecture and applications. *BMC Bioinformatics*, 10, 421.

5. Cantarel B.L. et al. . (2008) MAKER: an easy-to-use annotation pipeline designed for emerging model organism genomes. *Genome Res.*, 18, 188–196.

6. Eilbeck K. et al. . (2009) Quantitative measures for the management and comparison of annotated genomes. *BMC Bioinformatics*, 10, 67.

7. Goodswen S.J. et al. . (2012) Evaluating high-throughput ab initio gene finders to discover proteins encoded in eukaryotic pathogen genomes missed by laboratory techniques. *PLoS One*, 7, e50609.

8. Hou Z. et al. . (2015) A cost-effective RNA sequencing protocol for large-scale gene expression studies. *Nat. Sci. Rep.*, 5, 59.

9. Howe D. et al. . (2008) Big data: the future of biocuration. *Nature*, 455, 47–50.

10. Keller O. et al. . (2011) A novel hybrid gene prediction method employing protein multiple sequence alignments. *Bioinformatics*, 27, 757–763.

11. Korf I. (2004) Gene finding in novel genomes. *BMC Bioinformatics*, 5, 59.

12. Lomsadze A. et al. . (2014) Integration of mapped RNA-Seq reads into automatic training of eukaryotic gene finding algorithm. *Nucleic Acids Res.*, 42, e119.

13. Nielsen C.B. et al. . (2010) Visualizing genomes: techniques and challenges. *Nat. Methods*, 7, S5–15.

14. Nygaard S. Wurm Y. (2015) Ant genomics (Hymenoptera: Formicidae): challenges to overcome and opportunities to seize. *Myrmecol. News*, 21, 59–72.

15. Parra G. et al. . (2007) CEGMA: A pipeline to accurately annotate core genes in eukaryotic genomes. *Bioinformatics*, 23, 1061–1067.

16. Pray L.A. (2008). Eukaryotic genome complexity. *Nat. Educ.*, 1, 96.

17. Riba-Grognuz O. et al. . (2011) Visualization and quality assessment of de novo genome assemblies. *Bioinformatics*, 27, 3425–3426.

18. Simola D.F. et al. . (2013) Social insect genomes exhibit dramatic evolution in gene composition and regulation while preserving regulatory features linked to sociality. *Genome Res.*, 23, 1235–1247.

19. Stanke M. et al. . (2008) Using native and syntenically mapped cDNA alignments to improve de novo gene finding. *Bioinformatics*, 24, 637–644.

20. The UniProt Consortium. (2014) Uniprot: a hub for protein information. *Nucleic Acids Res.*, gku989.

21. Wetterstrand K. (2015). *DNA Sequencing Costs: Data from the NHGRI Genome Sequencing Program* (GSP).

22. Wilkerson M. et al. . (2006) yrGATE: a web-based gene-structure annotation tool for the identification and dissemination of eukaryotic genes. *Genome Biol.*, 7, r58.

23. Wurm Y. (2015) Avoid having to retract your genomics analysis. *The Winnower*, 2, e143696.68941.

24. Yandell M. Ence D. (2012) A beginner’s guide to eukaryotic genome annotation. *Nat. Rev. Genet.*, 13, 329–342.

<br />

## Author notes
<hr />

† The authors wish it to be known that, in their opinion, the first two authors should be regarded as joint First Authors.

Associate Editor: John Hancock

© The Author 2016. Published by Oxford University Press.

This is an Open Access article distributed under the terms of the Creative Commons Attribution License ([https://creativecommons.org/licenses/by/4.0/](https://creativecommons.org/licenses/by/4.0/){:target="_blank"}), which permits unrestricted reuse, distribution, and reproduction in any medium, provided the original work is properly cited.

© The Author 2016. Published by Oxford University Press.

<br />

## Supplementary data
<hr />

[Supplementary Data](/publications/2016-genevalidator-improving-gene-curation-efforts/btw015_Supplementary_Data.zip) - zip file

<br />

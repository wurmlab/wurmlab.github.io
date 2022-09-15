---
title: 'Visualization and quality assessment of de novo genome assemblies'
layout: publication
permalink: /publications/rnaseq-to-evaluate-genome-assembly-accuracy/
---

<br />

<p class="info-text">Published: 12 October 2011</p>

# Visualization and quality assessment of *de novo* genome assemblies

<h5 class="info-text my-4">Oksana Riba-Grognuz, Laurent Keller, Laurent Falquet, Ioannis Xenarios, Yannick Wurm</h5>

[*Bioinformatics*](https://doi.org/10.1093/bioinformatics/btr569), 2011, Volume 27, Issue 24, Pages 3425–3426

<br />

## Abstract
<hr />

**Summary:** Recent technological progress has greatly facilitated *de novo* genome sequencing. However, *de novo* assemblies consist in many pieces of contiguous sequence (contigs) arranged in thousands of scaffolds instead of small numbers of chromosomes. Confirming and improving the quality of such assemblies is critical for subsequent analysis. We present a method to evaluate genome scaffolding by aligning independently obtained transcriptome sequences to the genome and visually summarizing the alignments using the Cytoscape software. Applying this method to the genome of the red fire ant *Solenopsis invicta* allowed us to identify inconsistencies in 7%, confirm contig order in 20% and extend 16% of scaffolds.

<br />

## 1. Introduction
<hr />

*De novo* assemblies of eukaryotic genomes consist in many pieces of contiguous sequence (contigs) arranged in thousands of scaffolds instead of a few scaffolds corresponding to the chromosomes (<span class="info-text">Jackman and Birol, 2010</span>). Evaluating the qualities of such assemblies is a major challenge, especially in emerging model organisms that lack reference genomes. Independently obtained mRNA or protein sequences, or pairs of sequences separated by known genomic distances can be aligned to a genome assembly to help assess its quality (<span class="info-text">Paszkiewicz and Studholme, 2010</span>; <span class="info-text">Parra et al., 2008</span>). However, it is difficult to systematically evaluate the thousands or millions of resulting alignments.

ABySS-Explorer (<span class="info-text">Nielsen et al., 2009</span>) provides a global view of a genome assembly, but it displays only the information used to create that assembly. Other visualization tools often display alignments of individual sequences, but fail to provide genome-level overviews (<span class="info-text">Nielsen et al., 2010</span>; <span class="info-text">Supplementary Table S1</span>).

We present an approach for genome quality assessment based on a general visualization tool, Cytoscape (<span class="info-text">Shannon et al., 2003</span>), which is a popular platform to visualize and analyze molecular interaction networks (<span class="info-text">Suderman and Hallett, 2007</span>). <span class="info-text">Comeau et al. (2010)</span> examined synteny between metagenomic scaffolds using Cytoscape, thus demonstrating its potential for visualizing genomic alignments. Here, we show that Cytoscape can be used for visually representing alignments between independently obtained mRNA sequences, genome contigs and scaffolds. It allows rapid confirmation of intrascaffold connections between contigs and detection of possible scaffold extensions and inconsistencies.

<br />

## 2. Visualizing Transcript To Genome Consistency
<hr />

The exons of a transcript should align sequentially to a single chromosomal region. However, in a fragmented assembly, different parts of a transcript may align to multiple contigs or scaffolds. We provide scripts that summarize such cases into overview files for visualization with Cytoscape (Section S1 in <span class="info-text">Supplementary Material</span> provides details on how Cytoscape network files are generated from genomic FASTA-format sequence and AGP-format scaffolding information files). Visual inspection of these overviews can help to confirm contig order within scaffolds, extend scaffolds and identify inconsistencies.

#### 2.1 Confirmation of contig connections

During genome assembly, contigs are ordered into scaffolds based on pairs of sequences separated by known distances. Similarly, transcripts that align to multiple contigs indicate which contigs are adjacent. We simultaneously visualize information from both sources; consistency confirms when scaffolding is likely correct.

We applied this method to 22 685 contigs in 1978 scaffolds of the recently assembled genome of the red fire ant *Solenopsis invicta* (<span class="info-text">Wurm et al., 2011</span>; Section S2.A in <span class="info-text">Supplementary Material</span>). We identified 966 transcripts (87.7% of transcripts in the network) that confirmed the adjacencies of 1918 contigs within 399 scaffolds (Section S2.C in <span class="info-text">Supplementary Material</span>). <span class="info-text">Figure 1A</span> illustrates that the coordinates of alignments between transcripts (prefix e_) and pairs of contigs (prefix g_c) are consistent with the adjacency and orientation of these contigs within the corresponding three genomic scaffolds (prefix g_s).

<div class="publication-image mb-3">
  <h5><em>Fig. 1.</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/global-alignment-views-in-cytoscape.webp" />
    <img src="/img/publications/global-alignment-views-in-cytoscape.jpg" width="1092" height="560" alt="Global alignment views in Cytoscape" />
  </picture>
  <p class="mt-2">
    Global alignment views in Cytoscape. (<b>A</b>) Contig-level: nodes represent scaffolded contigs, vertical dashes indicate contig adjacency according to scaffolding information in the order indicated by an arrow, full lines connect nodes with common aligned transcripts. (<b>B</b>) Scaffold-level: nodes represent scaffolds and unscaffolded contigs, full lines connect nodes with common aligned transcripts, zigzag lines indicate inconsistency between scaffolding and transcript mapping information, arrows indicate merge (circle) and join cases (triangle, indicates order). In (A) and (B), node sizes are proportional to contig and scaffold lengths, and line widths are proportional to transcript lengths. Line colors indicate mapping strands. Force-directed layout used in Cytoscape was manually adjusted to fit printing space constraints. (<b>C</b>) Legend.
  </p>
</div>

#### 2.2 Scaffold extension

Transcripts that align to different genomic scaffolds and/or unscaffolded contigs suggest that these genomic sequences are adjacent or that they should be merged because one fills one or more gaps in the other. Our scripts determine the most likely solutions and their feasibility based on sequence and gap lengths and alignment coordinates. Relationships are then visually inspected.

We processed 1978 scaffolds and 67 533 unscaffolded contigs of the red fire ant genome. We found 572 consistent transcript alignments (87.6% of transcripts in the network) that connected 374 scaffolds and 577 unscaffolded contigs into 309 super-scaffolds (Section S2.D in <span class="info-text">Supplementary Material</span>). <span class="info-text">Figure 1B</span> shows two such super-scaffolds: two of the three scaffolds are likely adjacent (triangle arrowheads) and 10 unscaffolded contigs likely fill gaps (circle arrowheads) within scaffolds.

#### 2.3 Highlighting inconsistencies

Network topology allows identifying inconsistencies in both contig- and scaffold-level networks. For example, contig g_c88686 in <span class="info-text">Figure 1A</span> is connected to three other contigs. The connections to two of these contigs were inferred from paired reads during scaffolding, and an additional link is deduced from transcript e_i01474 alignment. The latter connection would lead to an impossible overlap between the two scaffolds. This problem is highlighted by a zigzag line with triangular arrows in <span class="info-text">Figure 1B</span> (more details in Section S2 in <span class="info-text">Supplementary Material</span>).

<br />

## 3. Conclusions
<hr />

This approach allows systematic evaluation of genome assemblies' quality, and thus could be useful for large-scale sequencing projects such as the i5K initiative (<span class="info-text">Robinson et al., 2011</span>).

†Present address: School of Biological and Chemical Sciences, Queen Mary, University of London, London E1 4NS, UK.

<br />

## Acknowledgement
<hr />

We thank Vital-IT for advice and computing infrastructure.

*Funding:* Swiss National Science Foundation and European Research Council advanced grant (to L.K.).

*Conflict of Interest:* none declared.

<br />

## References
<hr />

1. Comeau A.M., et al. Gene network visualization and quantitative synteny analysis of more than 300 marine T4-like phage scaffolds from the GOS metagenome, *Mol. Biol. Evol.*, 2010, vol. 27 (pg. 1935-1944)

2. Genome 10K Community of Scientists.A proposal to obtain whole-genome sequence for 10 000 vertebrate species, *J. Hered.*, 2009, vol. 100 (pg. 659-674)

3. Jackman S.D.,  Birol I.. Assembling genomes using short-read sequencing technology, *Genome Biol.*, 2010, vol. 11 pg. 202

4. Nielsen C.B., et al. ABySS-Explorer: visualizing genome sequence assemblies, *IEEE Trans. Vis. Comput. Graph.*, 2009, vol. 15 (pg. 881-888)

5. Nielsen C.B., et al. Visualizing genomes: techniques and challenges, *Nat. Methods*, 2010, vol. 7 Suppl. 3(pg. S5-S15)

6. Paszkiewicz K.,  Studholme DJ.. De novo assembly of short sequence reads, *Brief. Bioinform.*, 2010, vol. 11 (pg. 457-472)

7. Parra G., et al. Assessing the gene space in draft genomes, *Nucleic Acids Res.*, 2009, vol. 37 (pg. 289-297)

8. Robinson G.E., et al. Creating a buzz about insect genomes, *Science*, 2011, vol. 331 pg. 1386

9. Shannon P., et al. Cytoscape: a software environment for integrated models of biomolecular interaction networks, *Genome Res.*, 2003, vol. 13 (pg. 2498-2504)

10. Suderman M.,  Hallett M.. Tools for visually exploring biological networks, *Bioinformatics*, 2007, vol. 23 (pg. 2651-2659)

11. Wurm Y., et al. The genome of the fire ant *Solenopsis invicta*, *Proc. Natl Acad. Sci. USA*, 2011, vol. 108 (pg. 5679-5684)

<br />

## Author notes
<hr />

Associate Editor: Alfonso Valencia

© The Author 2011. Published by Oxford University Press. All rights reserved. For Permissions, please email: [journals.permissions@oup.com](mailto:journals.permissions@oup.com)

<br />

## Supplementary data
<hr />

[Supplementary Data](/publications/2011-rnaseq-to-evaluate-genome-assembly-accuracy/btr569_supplementary_data.zip) - (zip file)

<br />

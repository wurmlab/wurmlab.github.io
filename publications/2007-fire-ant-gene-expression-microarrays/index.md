---
title: 'An annotated cDNA library and microarray for large-scale gene-expression studies in the ant Solenopsis invicta'
layout: publication
permalink: /publications/fire-ant-gene-expression-microarrays/
---

<br />

<p class="info-text">Published: 15 January 2007</p>

# An annotated cDNA library and microarray for large-scale gene-expression studies in the ant *Solenopsis invicta*

<h5 class="info-text my-4">John Wang, Stephanie Jemielity, Paolo Uva, Yannick Wurm, Johannes Gräff & Laurent Keller</h5>

[*Genome Biology*](http://dx.doi.org/10.1186/gb-2007-8-1-r9), 2007, 8:R9

<br />

## Abstract
<hr />

Ants display a range of fascinating behaviors, a remarkable level of intra-species phenotypic plasticity and many other interesting characteristics. Here we present a new tool to study the molecular mechanisms underlying these traits: a tentatively annotated expressed sequence tag (EST) resource for the fire ant *Solenopsis invicta*. From a normalized cDNA library we obtained 21,715 ESTs, which represent 11,864 putatively different transcripts with very diverse molecular functions. All ESTs were used to construct a cDNA microarray.

<br />

## Background
<hr />

Ants are important model species for sociobiology and behavioral ecology <span class="info-text">[1]</span>. Life in an ant colony is marked by cooperation, but it also harbors conflicts. Both aspects have been studied extensively to understand the prerequisites for social behavior and to test the kin selection theory (reviewed in <span class="info-text">[2]</span>). Other fascinating research areas in ants include self-organization, life-history evolution, as well as division of labor.

With the advent of new molecular and genomic techniques it is becoming possible to identify the genes underlying social behavior <span class="info-text">[3, 4]</span>, as well as those involved in other interesting behaviors and traits. Unfortunately, in ants such studies have been seriously constrained by the lack of sequence data and other molecular tools. The majority of ant gene sequences have derived from two studies. A recent experiment examined differential gene expression in fire ants between winged virgin queens and wingless mated queens <span class="info-text">[5]</span>. From this study 81 expressed sequence tags (ESTs) were submitted to GenBank. Another study, focusing on gene expression changes during the development of *Camponotus festinatus* workers, yielded 384 ESTs <span class="info-text">[6]</span>. While informative, both of these studies were limited by the small number of genes examined. The goal of this project was, therefore, to create and sequence a much larger set of ant ESTs, namely for the ant *Solenopsis invicta*. Used in conjunction with DNA microarray technology <span class="info-text">[7, 8]</span>, this sequence resource will allow us and other researchers to examine thousands of ant genes simultaneously.

*S. invicta* is one of the most extensively studied ant species. Also known as the red imported fire ant because of its accidental introduction to the United States from South America in the early 1900s and because of its painful, burning sting, this species has become a major agricultural and wildlife pest in the southern USA <span class="info-text">[9]</span>. In attempts to control this species, its basic biology has been well elucidated <span class="info-text">[10, 11]</span>. Studies on *S. invicta* led the way in a number of research areas important for evolutionary biology: nest-mate conflicts over reproduction <span class="info-text">[12, 13]</span>, sex-ratio conflicts <span class="info-text">[14, 15]</span>, nepotism <span class="info-text">[16]</span>, chemical communication and warfare <span class="info-text">[17, 18]</span>, and social evolution <span class="info-text">[19]</span>. A particularly fascinating aspect of fire ant biology is that two distinct types of social organization exist in this species, and this is linked to a single gene, *Gp-9* <span class="info-text">[20–22]</span>. Colonies of the monogynous form are headed by a single reproductive queen with a specific *Gp-9* genotype (*BB*), while colonies of the polygynous form contain up to several hundred reproductive queens that are all *Gp-9* heterozygotes (*Bb*). The number of queens is regulated by workers, which will kill or tolerate additional queens based on their own and the queens' *Gp-9* genotype <span class="info-text">[22]</span>. This is one of a few cases where a complex social behavior is governed by a simple genetic mechanism.

We describe here a collection of 21,715 *S. invicta* ESTs generated from a normalized cDNA library. This library should encompass a maximum variety of genes, as it was derived from mRNA of all developmental stages of queens, males and workers from both colony types. Sequence assembly resulted in 11,864 putatively different genes. We have used a combination of blast analysis and protein pattern searches to obtain a preliminary Gene Ontology (GO) annotation for these genes. By comparison to the honey bee, we identified 23 potential Hymenoptera-specific genes. All ESTs were used to generate a high-density cDNA microarray, which will be a valuable resource for molecular, ecological and evolutionary studies in ants.

<br />

## Results and discussion
<hr />

#### Generation and assembly of fire ant ESTs

To survey the fire ant gene repertoire, we generated ESTs from a normalized cDNA library derived from ants of all developmental stages and castes (workers, queens, and males) of both the monogynous and polygynous social forms. First, we sequenced the 5' ends of 22,560 clones from the cDNA library. This yielded a total of 28,113 sequence reads, since about one-fourth of all clones were sequenced twice. From this set we then removed artifactual sequences and sequences smaller than 200 base pairs (bp; after vector and primer clipping), identifying 21,715 high-quality ESTs of 522 bp average length (<span class="info-text">Table 1</span>).

<div class="publication-image mb-3">
  <h5><em>Table 1 – <strong>Fire ant EST and assembly statistics.</strong></em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/table-1-fire-ant-EST-and-assembly.webp" />
    <img src="/img/publications/table-1-fire-ant-EST-and-assembly.jpg" width="1092" height="312" alt="Fire ant EST and assembly statistics" />
  </picture>
  <p class="mt-2">
    *High quality sequences are those with greater than 200 bp after trimming of vector and primer sequences and with a phred value higher than 15. In addition, this set excludes artifactual sequences that were manually removed. †Contigs composed of replicate sequences of only one clone.
  </p>
</div>

To find redundant transcripts, the 21,715 ESTs were assembled into contiguous sequences (contigs, <span class="info-text">Table 1</span>) using the Paracel Clustering Package. A total of 14,170 ESTs were assembled into 4,319 contigs, while the remaining 7,545 ESTs remained singleton sequences. In sum, there were 11,864 gene sets, hereafter referred to as assembled sequences, that putatively represent different transcripts. However, this number is expected to overestimate the true number of transcripts represented because some non-overlapping ESTs may represent the same gene and because assembly may have failed in case of alternative splicing, sequence polymorphism or sequencing errors. Assessed with a second independent method, the number of putatively different fire ant transcripts was indeed estimated at 'only' 9,770 (see below). The average length of all assembled sequences was 600 bp.

Since some of the cDNA clones were sequenced several times, 1,262 of the 4,319 contigs are due to re-sequencing, that is, composed of sequences of a single re-sequenced clone. The remaining 3,057 contigs are 'true contigs', that is, derived from at least two independent cDNA clones (<span class="info-text">Table 1</span>).

#### Quality of the cDNA clones and sequences

To obtain a tentative estimate of the percentage of 5' truncated transcripts, we compared the fire ant assembled sequences to a set of 3,951 proteins listed on the eukaryotic orthologous groups (KOG) database <span class="info-text">[23]</span> that are highly conserved among *Drosophila melanogaster*, *Caenorhabditis elegans* and *Homo sapiens*. In total, 1,827 fire ant assembled sequences had a highly significant blastx hit (E ≤ 1e-20) to the *Drosophila* KOG proteins. Among these, 749 (41%) had regions of similarity that started within the 20 first amino-terminal amino acid residues of their *Drosophila* homologs with either an in-frame methionine at the same position as the fruitfly start methionine (588) or upstream of the alignment start (161). This suggests that up to 41% of the assembled sequences might have an intact 5' end, whereas the remaining 59% are probably 5' truncated.

The number of 3' truncated transcripts was harder to estimate because most cDNA clones (52.8%) were not sequenced all the way through to their 3' end (that is, the 5' sequence reads were shorter than most cDNA clones). Nevertheless, since 39.3% of all fire ant ESTs ended with a polyA sequence, up to 39.3% of our ESTs may have an intact 3' end. This is, however, likely to be an overestimate, as not all polyA sequences are true polyA tails.

Consistent with the expectation that the fire ant cDNA clones were sequenced from the 5' end, 92.2% of all assembled sequences with significant similarity to a gene in the non-redundant (nr) database were encoded on the plus strand. This estimate was obtained by counting how many times the open reading frames (ORFs) of the fire ant assembled sequences matched that of their best homologs in other organisms (see next section). However, a small percentage of the ant assembled sequences (7.8%) appeared to be encoded on the minus strand. This could be due to non-specific annealing of the SMART adaptors, to transcription of an adjacent gene pointing in the opposite orientation, or to the presence of antisense transcripts in our library.

To assess overall sequence quality, we computed the number of unresolved bases, marked as N by the base-calling program phred, present in all ESTs and assembled transcripts. The majority of sequences (83.7% of assembled sequences and 81.3% of all ESTs) had no unresolved bases. Another 15.8% of assembled sequences and 17.5% of ESTs had between one and three unresolved bases. Finally, a small percentage of sequences (0.5% of assembled transcripts and 1.2% of ESTs) had more than four unresolved bases.

#### Comparative genomic analysis of fire ant cDNA data

We used the blastx algorithm to compare the 11,864 fire ant assembled sequences to the nr database. Of these, 2,936 (24.7%) and 3,964 (33.4%) assembled sequences matched known or predicted protein-coding genes at a cutoff expectation value (E) of 1e-20 and 1e-5, respectively (<span class="info-text">Figure 1a</span>). By contrast, 6,431 (54.2%) had no similarity at all to genes in the nr database (E > 1). For many of these 6,431 clones, the lack of detectible similarity may be because the sequenced region does not encompass a long enough ORF to meet the blastx comparisons' cutoff of 1. This may result from 5' truncation of cDNA clones (causing ESTs to consist mostly or entirely of 3' untranslated region), from a long 5' untranslated region, or from priming in intron regions of the pre-mRNAs. Alternatively, transcripts may lack large ORFs because they are short or because they are noncoding RNAs (that is, transcripts other than rRNA or tRNA that do not code for proteins). Noncoding RNAs are now thought to make up a considerable portion of the polyadenylated transcripts found in libraries such as ours <span class="info-text">[24, 25]</span>. For instance, in humans 57% of all polyadenylated transcripts might be noncoding RNAs <span class="info-text">[26]</span>.

<div class="publication-image mb-3">
  <h5><em>Figure 1</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/sequence-analysis-by-blastx-searches.webp" />
    <img src="/img/publications/sequence-analysis-by-blastx-searches.jpg" width="1092" height="1505" alt="Sequence analysis by blastx searches" />
  </picture>
  <p class="mt-2">
    Sequence analysis by blastx searches. (<b>a</b>) Percentage of fire ant assembled sequences with and without blastx matches at various E-value cutoffs. (<b>b</b>) Quantitative overview of organisms providing the best-matching homologous protein sequences to fire ant assembled sequences (E ≤ 1e-5).
  </p>
</div>

<span class="info-text">Figure 1b</span> depicts the 'best hit' for the 3,964 fire ant assembled sequences displaying significant similarity to known or predicted protein-coding genes. The best hit was a honey bee gene 61.6% of the time. This was expected, as the honey bee is the most closely related species with a fully sequenced genome. Due to the paucity of non-honey bee hymenopteran sequences in GenBank, for only 106 (2.7%) assembled sequences was the best hit a known ant gene; and only 41 (1.0%) assembled sequences were most related to a gene from hymenopteran species other than ants or the honey bee. An additional 953 (24.0%) fire ant assembled sequences were most similar to genes from non-hymenopteran insect species. Of these, 359 and 417 had best matches to fruitfly and mosquito genes, respectively. Interestingly, a subset of 320 genes (8.1%) shared their closest similarity with vertebrates, which is an observation that has also been made for the honey bee <span class="info-text">[27]</span>. Other assembled sequences were most similar to genes from Nematoda (11) or other Animalia (26). Several had best matches to bacteria (4) or protozoa (13), possibly because these sequences were derived from microbes that infect fire ants or that have a commensal relationship with them. Alternatively, these sequences could be due to microbial contaminations acquired during sample collection. Finally, 17 assembled sequences appeared to be derived from viruses, including the recently identified *S. invicta* SINV-1 and SINV-1A viruses <span class="info-text">[28, 29]</span>.

Interestingly, for 1,341 fire ant assembled sequences the best hit was a non-hymenopteran gene (bacterial, viral and protozoan hits excluded). This could be due to extensive sequence divergence between ant-bee gene pairs or gene loss in the bee. We examined these two alternatives using the recently completed and annotated honey bee genome sequence <span class="info-text">[30]</span>. Most fire ant genes with a non-hymenopteran best hit (80.5%; 1,080/1,341) had a significant blastx hit to an annotated honey bee gene (<span class="info-text">Additional data file 1</span>). Using tblastx, blastn or Ensembl (v38 Apr 2006 <span class="info-text">[31]</span>) honey bee gene predictions, an additional 69 fire ant genes showed evidence for a potential honey bee homolog (<span class="info-text">Additional data file 1</span>). Thus, for these 1,149 assembled sequences, sequence divergence is the likely reason for a non-hymenopteran best hit. Such sequence divergence could be due to directional selection in the honey bee lineage. The remaining 192 (14.3%) assembled sequences do not display significant similarity to the honey bee genome (<span class="info-text">Additional data file 1</span>). This could be because some ant sequences are too short to meet the significance threshold for similarity (1e-5), extreme sequence divergence, or putative gene loss in the honey bee lineage.

We also used the blastx analysis described as an alternative method to estimate the number of unique fire ant genes sequenced. A total of 3,366 fire ant assembled sequences matched 2,772 different honey bee proteins, suggesting that 82.4% (2,772/3,366) of the fire ant assembled sequences may be unique. Thus, the 11,864 fire ant assembled sequences may represent 9,770 different genes. Assuming that the fire ant and the honey bee have a similar total number of genes (that is, 13,448 to 20,998 predicted genes, Ensembl v38 April 2006 <span class="info-text">[31]</span>), this would represent approximately 46.5% to 72.7% of the genes in the fire ant genome.

In addition to the above-mentioned blastx searches to identify putative protein-coding genes, we carried out two other genomic analyses. First, to identify potential noncoding RNAs among the fire ant assembled sequences, we compared all assembled sequences via blastn to known noncoding RNAs from the NONCODE database <span class="info-text">[32]</span> and the miRBase microRNA collection <span class="info-text">[33]</span>. Consistent with the view that noncoding RNAs are often poorly conserved across taxa <span class="info-text">[25]</span>, the vast majority of fire ant sequences had no significant hits in these databases (E > 1e-5). Only one fire ant transcript (SiJWG03CAD.scf) was highly similar (E = 3e-14) to a known human microRNA (miRBase ID: hsa-mir-594). Second, we identified 772 assembled sequences conserved between the fire ant and the honey bee that fulfilled the following conditions: no resemblance to any known protein in the nr database (blastx, E > 1e-5), a good blastn hit against the honeybee genome (E ≤ 1e-5), and no significant blastn hit against other organisms (E > 1e-5). This list of genes (<span class="info-text">Additional data file 2</span>) is likely to include transcripts with conserved untranslated region sequence motifs and some additional noncoding RNAs. However, it may also contain ant protein-coding genes that failed to have a blastx hit because they are truncated or because their honey bee homolog failed to be predicted during genome annotation.

#### Functional annotation

Provisional functional annotation of the fire ant assembled sequences was done by adopting the GO annotation of the best-matching homologs in the nr database. At a blastx E-value cutoff of 1e-5, 3,964 fire ant assembled sequences displayed matches to proteins in the nr database. Of these, 3,035 (76.6%) could be annotated into at least one of the three main GO categories (biological process, molecular function, or cellular component) and 1,617 (40.8%) were in all three. The distribution of the fire ant assembled sequences among the main subcategories is summarized in <span class="info-text">Table 2</span> and the full GO assignments are in <span class="info-text">Additional data file 3</span>. The most frequently identified molecular functions were 'binding' and 'catalytic activity' and those for biological process were 'physiological process' and 'cellular process' (<span class="info-text">Table 2</span>). In addition to the annotation through blastx searches, GO classifications were assigned to fire ant assembled sequences based on the Prosite protein domains they contain (<span class="info-text">Table 2</span>, <span class="info-text">Additional data file 4</span>). These two GO annotations were then contrasted with the GO annotation of the *D. melanogaster* genome: The relative counts of fire ant genes were significantly different (hypergeometric distribution: p < 1e-8) from the relative counts of *Drosophila* genes in up to 23 second-level GO categories (<span class="info-text">Table 2</span>). This could indicate that these gene categories are over- or underrepresented in the fire ant genome relative to the *Drosophila* genome. Alternatively, these gene categories may simply be biased in cDNA libraries relative to genomes, for instance, because they contain mainly highly or mainly lowly expressed genes. GO groupings and subcategories can be further explored using the AmiGO feature <span class="info-text">[34]</span> of the Fourmidable database. As the annotations are automated, all functional assignments are tentative and considered at the 'inferred from electronic annotation' (IEA) level of evidence (see <span class="info-text">[35]</span>).

<div class="publication-image mb-3">
  <h5><em>Table 2 – <strong>Gene Ontology annotation.</strong></em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/table-2-gene-ontology-annotation.webp" />
    <img src="/img/publications/table-2-gene-ontology-annotation.jpg" width="1092" height="1154" alt="Gene Ontology annotation" />
  </picture>
  <p class="mt-2">
    Listed are the numbers and percentages of assembled fire ant sequences and of <em>D. melanogaster</em> genes that match at least one of the second-level GO terms for molecular function, cellular component, or biological process. GO annotations for fire ant sequences were inferred electronically using two methods: blastx homology to GO-annotated proteins and Prosite protein domain scans. Statistically significant over- (↑) or underrepresentation (↓) of GO terms in fire ant relative to the <em>Drosophila</em> genome are indicated in bold (p < 10<sup>-8</sup>, Bonferroni-corrected hypergeometric test). *This number represents the sum of the numbers of occurences of GO terms below this level. †The 'cell part' and 'virion part' GO categories were excluded from analyses because they were redundant with the 'cell' and 'virion' categories, respectively.
  </p>
</div>

#### Being a Hymenopteran

The ants are classified within the order Hymenoptera, a group of insects including ants, bees and wasps. To identify Hymenoptera-specific genes, we looked for fire ant sequences that exhibited similarity only to genes from the honey bee or other Hymenoptera species. Using stringent criteria, we identified 148 fire ant sequences with strong similarity to the honey bee genome (tblastx, E < 1e-10) but no similarity to other known sequences (tblastx against non-hymenopteran sequences of the EMBL Nucleotide Sequence Database release 88; E > 1).

As the fire ant sequences are not necessarily full-length, the region of ant-bee homology, while apparently Hymenoptera-specific, may be part of a larger and phylogenetically conserved protein. To investigate this possibility, we examined the surrounding honey bee genomic sequence (±5,000 bp) of each candidate Hymenoptera-specific gene. Genes predicted by homology with other organisms were found near most of our putative ant-bee pairs. These regions of ant-bee homology may simply be fragments of known genes that diverged in ants and bees. However, for 23 ant-bee gene pairs (<span class="info-text">Table 3</span>, <span class="info-text">Figure 2</span>, <span class="info-text">Additional data file 5</span>), the predicted neighboring genes are either specific to bees or are transcribed in the opposite direction. Unless the region of ant-bee homology is part of a conserved gene with a large intron (that is, >5,000 bp), these 23 ant-bee gene pairs are strong candidate Hymenoptera-specific genes.

<div class="publication-image mb-3">
  <h5><em>Table 3 – <strong>Putative Hymenoptera-specific genes.</strong></em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/table-3-putative-hymenoptera-specific-genes.webp" />
    <img src="/img/publications/table-3-putative-hymenoptera-specific-genes.jpg" width="1092" height="1445" alt="Putative Hymenoptera-specific genes" />
  </picture>
  <p class="mt-2">
    <sup>1</sup><em>Solenopsis invicta</em> assembled sequences that show no significant similarity to any known non-hymenopteran sequence (E > 1), but high similarity to a region of the honey bee genome (E < e-10). <sup>2</sup>Length in base-pairs of the largest overlapping in-frame open reading frame. <sup>3</sup>In-frame Interproscan annotation of fire ant assembled sequence. T means 'transmembrane region', S means 'signal peptide'. <sup>4</sup>Gene is known (•) to be expressed in fire ant (unpublished microarray data). <sup>5</sup>In honey bee, EST evidence exists (•) within 5,000 bp of the aligned region. <sup>6</sup>This column shows the annotation of overlapping or nearby (within 5,000 bp) honey bee genes, as well as the nearby presence of genes from non-hymenopteran organisms. Numbers starting with GB are honeybee Official Gene Set numbers. '<em>Ab initio</em> prediction' indicates that Gnomon, Genscan, or another algorithm was used to predict a gene that was not retained for the bee genome Official Gene Set. 'NH homology' indicates the nearby presence of a gene from non-hymenopteran organisms. <sup>7</sup>Based on visual inspection we assigned a confidence level (the more asterisks the better) to each ant-bee putative gene pair (see Materials and methods). <sup>8</sup><em>Apis mellifera</em> unanchored scaffolds such as NW_001254419.1 are regions that have not been mapped to a chromosome. <sup>9</sup>Multiple alignment frames for a <em>S. invicta</em> transcript indicate possible frameshifts during sequencing.
  </p>
</div>

<br />

<div class="publication-image mb-3">
  <h5><em>Figure 2</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/examples-of-two-candidate-hymenoptera.webp" />
    <img src="/img/publications/examples-of-two-candidate-hymenoptera.jpg" width="1092" height="1676" alt="Examples of two candidate Hymenoptera-specific genes" />
  </picture>
  <p class="mt-2">
    Examples of two candidate Hymenoptera-specific genes. (<b>a</b>) Fire ant sequence SI.CL.23.cl.2326.Contig1 matches an <em>ab intio</em> predicted honey bee gene that has no homology to any sequences in the public databases. The predicted gene was not included in the Honey Bee Official Gene Set. (<b>b</b>) Fire ant assembled sequence SiJWG03ACB.scf is the first EST evidence for the <em>ab initio</em> predicted honey bee gene GB19005-PA. Fire ant sequences are depicted as yellow boxes. Orientation (5' to 3') is indicated by an arrow. Predicted honey bee genes are depicted in purple; official Gene Set genes are shown in red. Images are based on output from Beebase (see Materials and methods).
  </p>
</div>

Further examination of these 23 candidate genes in hymenopteran species could prove interesting for understanding shared features. For instance, all Hymenoptera species have a haplodiploid sex determination system, with males developing from unfertilized haploid eggs and females from fertilized diploid eggs. Another feature found in many Hymenoptera is social behavior. Social behavior evolved independently in ants, bees and wasps <span class="info-text">[36, 37]</span> and, thus, it may be possible that a subset of the 23 ant-bee gene pairs was permissive for sociality to evolve or is important for social behavior.

#### Behavior genes

To identify candidate genes that might be involved in the complex behavior of ants we compared the fire ant assembled sequences to a set of 106 Drosophila genes that are directly implicated in behavior <span class="info-text">[27]</span>. Of these behavior genes, 17 (16%) matched at least one fire ant assembled sequence (<span class="info-text">Table 4</span>). This value is less than the 44% (47/106; chi-squared, p < 5e-9) identified by the honey bee brain cDNA library <span class="info-text">[27]</span>, possibly because the honey bee cDNA library was specifically derived from brain tissue. We also compared the fire ant assembled sequences to all 636 Drosophila genes that had the GO annotation 'behavior'. Of these, 81 (13%) were good hits for at least 1 fire ant assembled sequence (<span class="info-text">Additional data file 6</span>). In addition, some genes involved in complex behaviors in ants and other Hymenoptera may be specific to this taxon and not homologous to known genes.

<div class="publication-image mb-3">
  <h5><em>Table 4 – <strong>Fire ant assembled sequences putatively involved in behavior.</strong></em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/table-4-fire-ant-assembled-sequences-piib.webp" />
    <img src="/img/publications/table-4-fire-ant-assembled-sequences-piib.jpg" width="1092" height="566" alt="Fire ant assembled sequences putatively involved in behavior" />
  </picture>
  <p class="mt-2">
    *Although the best hit for SiJWB11ABH.scf is <em>foraging</em>, a type I cGMP-dependent protein kinase (PKG), when using blastx analysis with only the <em>Drosophila</em> predicted proteins, closer inspection using all the nr sequences suggests that it is actually a type II PKG.
  </p>
</div>

#### Viruses

In analyzing the cDNA library we noticed the presence of several viral transcripts. Seventeen fire ant assembled sequences were most similar to viral genes from RNA or DNA viruses (blastx, E < 1e-5; <span class="info-text">Table 5</span>). Three sequences correspond to the recently identified SINV-1 virus, which possibly affects brood survival in *Solenopsis invicta* <span class="info-text">[28]</span>. As the mutation rate in viruses can be high, we relaxed the E-value cutoff stringency to 1e-2, which yielded an additional nine putative viral genes. Based on different patterns of co-expression across several microarray experiments (unpublished data) the 26 putative viral genes could represent at least 5 different viruses.

<div class="publication-image mb-3">
  <h5><em>Table 5 – <strong>Fire ant assembled sequences most similar to viral genes.</strong></em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/table-5-fire-ant-assembled-sequences-mstvg.webp" />
    <img src="/img/publications/table-5-fire-ant-assembled-sequences-mstvg.jpg" width="1092" height="695" alt="Fire ant assembled sequences most similar to viral genes" />
  </picture>
</div>

To verify that these ESTs are from fire ant viruses and not from viruses infecting the insects fed to the ants, we tried to re-amplify all putative viral ESTs from fire ant cDNA derived from eggs, larvae and pupae. Out of 26 ESTs, 15 amplified when using egg and/or pupal cDNA as a template. Since eggs and pupae do not eat and either lack an intestine or have emptied their intestine, these 15 ESTs most likely stem from genuine fire ant viruses. Another five ESTs, including the three SINV-1 ESTs, amplified only in ant larvae. For these larvae-specific ESTs and the remaining six ESTs that amplified in none of the cDNA categories tested, additional tests would be needed to verify that they stem from fire ant viruses.

Further characterization of viruses in fire ants may be useful for two main reasons. First, as fire ants are an invasive pest species that causes considerable economic damage in the southern USA and other locations, viruses have been suggested as possible agents of fire ant control. Second, viruses can have dramatic effects on the behavior of their hosts. For instance, the Kakugo virus has been suggested to increase the aggressiveness of honey bee workers, as infected workers are much more likely to defend the nest against hornets than non-infected nestmates <span class="info-text">[38]</span>. Another virus is most likely involved in superparasitism behavior in the parasitoid wasp *Leptopilina boulardi* <span class="info-text">[39]</span>. It would be interesting to determine if the viruses identified by our EST project manipulate fire ant behavior to promote viral transmission or if they could be used for fire ant control.

#### Longevity

Ant queens and workers show up to ten-fold lifespan differences, although they develop from the same eggs and are thus genetically identical <span class="info-text">[1]</span>. Lifespan differences must, therefore, stem from differences in gene expression, making ants a useful system to study aging and lifespan determination <span class="info-text">[40, 41]</span>. The average lifespan of fire ant queens is estimated at six to seven years <span class="info-text">[42]</span>, while workers are thought to have an average lifespan of ten to 70 weeks <span class="info-text">[1]</span>. We have identified fire ant homologs (blastx, E < 1e-20) to several genes that are likely involved in determining the lifespan of invertebrate model organisms (reviewed in <span class="info-text">[43, 44]</span>): Cu-Zn superoxide dismutase (SI.CL.3.cl.379.Contig1), Mn superoxide dismutase (SI.CL.16.cl.1663.Contig1), catalase (SI.CL.40.cl.4085.Contig1), histone deacetylase Rpd3 (SiJWG06ABE.scf), Indy (SI.CL.40.cl.4047.Contig1) and the heatshock transcription factor HSF-1 (SiJWH04BCB2.scf). It will be exciting to test whether these homologs are expressed at different levels in the long-lived queens and the short-lived workers. In addition, comparing fire ant queens to fire ant workers using functional genomic approaches may help identify new candidate aging genes.

#### Highly expressed genes

In total, 67 contigs contained more than 10 ESTs (<span class="info-text">Additional data file 7</span>). Consistent with the hypothesis that these are highly expressed genes, we found several homologs to ribosomal genes and other housekeeping genes in this subset. The largest contig (SI.CL.0.cl.071.Contig1) contained 48 clones. Based on blastx searches this gene encodes a small (74 amino acid residue) protein of unknown function. Interestingly, this gene is highly conserved across vertebrates, arthropods and fungi. For instance, the putative fire ant protein and its zebra fish homolog share 79% amino acid residues. While the majority of the 67 highly expressed transcripts had significant blastx matches to well-characterized proteins, 18 (26.9%) did not match any known sequence (E > 1e-5 for both blastx and blastn).

#### Fire ant microarray

To permit functional genomic analysis for the fire ant we produced a cDNA microarray using all 22,560 clones sequenced from the cDNA library. We successfully PCR-amplified 17,685 (78.4%) cDNAs (only one strong band, <span class="info-text">Additional data file 8</span>), which putatively represent 10,122 (85.3%) of the fire ant assembled sequences (<span class="info-text">Additional data file 9</span>). To evaluate the percentage of cDNA spots derived from legitimate and sufficiently highly expressed transcripts, we examined the signal-to-background ratio of all spots in four test hybridizations (for details and additional analysis see <span class="info-text">Additional data files 10, 11, 12</span>). The two samples compared were derived from a mix of adults (workers, virgin queens, and males from both colony types in equal amounts) and a mix of brood (eggs, larvae and pupae of all castes in equal amounts). Of the spots derived from a single good PCR product, 82.8% (14,642/17,685) had an interpretable signal (that is, signal intensity greater than background plus two standard deviations), indicating that most cDNA clones are derived from legitimate transcripts.

#### Future prospects

The extraordinary complexity and diversity of morphology, behavior, and social organization in ants is far from being understood from a molecular genetics point of view. The present work, the largest collection of ESTs for an ant species, provides a valuable sequence, clone, and genomic resource for the ant research community. Using this resource it will be possible to identify genes important in caste determination, behavioral genetics and plasticity, chemical communication, and population control. This microarray should also allow comparisons across related species. More broadly, as the genome sequence for the social honey bee, *Apis mellifera*, is available and that for the solitary wasp, *Nasonia vitripennis*, will soon arrive, comparisons and contrasts of both gene sequence and expression among the three species might shed light onto hymenopteran biology, behavior and social organization.

<br />

## Conclusion
<hr />

We have sequenced 22,560 ESTs from a normalized fire ant cDNA library and assembled them into 11,864 putatively unique transcripts. Using comparative genomic analyses and the GO vocabulary, we have functionally annotated the fire ant ESTs into a broad range of molecular functions and biological processes. Examination of the fire ant genes has led to the identification of 23 putative Hymenoptera-specific genes. Finally, we have developed a cDNA microarray that will be useful for large-scale gene expression profiling.

<br />

## Materials and methods
<hr />

#### Ants

Monogynous and polygynous fire ant colonies were collected in Georgia (USA) in 2003 and 2004 and transferred to the laboratory as previously described <span class="info-text">[45]</span>. Colonies were maintained in climate-controlled rooms at 25°C and fed with crickets, mealworms, a mix of vegetables, and a mix of canned tuna fish, dog food and peanut butter. Samples were collected manually and immediately frozen in liquid nitrogen.

#### cDNA library

Using the Trizol reagent (Invitrogen, Carlsbad, CA, USA), total RNA was isolated from various samples of both monogynous and polygynous nests: eggs, small larvae, medium-sized larvae, sexual larvae, as well as pupae and adults of males, workers and queens (including both virgin and mated queens). We then pooled about 1 μg of each RNA sample to create a master sample with a maximum diversity of transcripts. This master sample was precipitated once with LiCl to eliminate contaminating DNA, quality checked on a 1% agarose gel and a Bioanalyzer 2100 chip (Agilent, Santa Clara, CA, USA) and sent in ethanol to Evrogen (Moscow, Russia) for cDNA library construction.

Evrogen constructed a normalized cDNA library using the SMART technology, which should enrich for full-length sequences. The plasmid used was pAL16. Based on PCR amplification of the inserts of 2,300 clones, the mean and median cDNA clone length was estimated at 940 bp and 850 bp, respectively. The shortest cDNA clone from this subset measured 180 bp, while the longest one measured about 3,300 bp. By comparison, the average *Drosophila* cDNA clone was 2 kb and the longest clone was 8.7 kb <span class="info-text">[46]</span>, suggesting that the fire ant cDNA library has many short clones that do not represent the entire transcriptional unit. Although the fire ant cDNA library is not directional, a 2 bp difference between the 3' and 5' SMART adaptors on all inserts permits sequencing cDNA clones specifically from the 5' end.

#### Sequencing and sequence analysis

For 22,560 clones selected at random from the cDNA library, approximately 600 bp-sequence reads were obtained from the insert 5' end. Of these clones, 5,573 were sequenced in duplicate (mostly both times from the 5' end, with the exception of 77 clones that were sequenced from both the 3' and the 5' end). The primer used for the first approximately 8,000 sequences was SMART tag2 5'-AAGCAGTGGTATCAACGCAGAGTACG-3' (which forms a 1 bp mismatch, in bold); the primer used for all other sequences was SMART tag2 fixed 5'-AAGCAGTGGTAACAACGCAGAGTACG-3' (which matches perfectly). Sequencing was done by Synergene (Schlieren, Switzerland) on plasmid DNA extracted from overnight cultures. Base calling was performed with phred <span class="info-text">[47, 48]</span>. The Paracel Clustering Package (Paracel, Pasadena, CA, USA) was used to filter low-quality sequences (base calls with phred values <15 and EST length <200 bp), to remove vector and SMART adaptor sequence, as well as to mask polyA tails and other repetitive sequences. In addition, Paracel was used to identify and assemble redundant transcripts: ESTs that had an overlap of >50 bp were, when possible, automatically assembled into contiguous sequences (contigs). ESTs that did not meet this criterion were called singletons.

In order to find homologs of the fire ant assembled sequences in other organisms, all singletons and contigs were used to interrogate public sequence databases. Blast sequence alignments <span class="info-text">[49, 50]</span> were performed using the Blast Network Service provided by the Swiss Institute for Bioinformatics or on a desktop PC using standalone blast software. For both blastx and blastn searches the default settings were used. E-values are reported at 1e-5, except where indicated otherwise.

#### Gene Ontology annotation

We used the blastx algorithm to compare all 11,864 assembled sequences against the nr protein database. Using the best GO annotated SwissProt or TrEmbl hit with an E-value ≤ 1e-5, we annotated our transcripts at the IEA evidence level. Additionally, we scanned all assembled sequences for Prosite patterns with the stand-alone ps_scan perl program using the default cutoff level of 0 <span class="info-text">[51]</span>. Transcripts having a Prosite pattern with a GO annotation were also annotated with the same GO terms at the IEA evidence level. In order to compare the fire ant GO annotations to those of *D. melanogaster*, we downloaded the *D. melanogaster* genome GO annotation from <span class="info-text">[52]</span> on 19 September 2006. The WEGO web tool <span class="info-text">[53]</span> was used to calculate the relative numbers of second-level GO categories within each first-level GO category (molecular function, biological process, cellular component) for both species. Using the hypergeometric test in R, we then tested which GO categories were significantly over- or underrepresented in the fire ant cDNA library relative to the *Drosophila* genome. Bonferroni correction was applied to the 80 tests carried out to correct for multiple comparisons.

#### Fourmidable database

A MySQL database with web interface was produced to house the fire ant EST and assembled sequence data (P Uva et al., manuscript in preparation). Users can view sequence trace files, perform blast searches against fire ant assembled sequences, download sequences, browse through blastx and GO annotations, and so on. The database is publicly accessible <span class="info-text">[54]</span>.

#### Identification of Hymenoptera-specific genes

All fire ant assembled sequences were compared against the nr protein database via blastx. The 6,948 transcripts that did not show strong similarity to the non-hymenopteran sequences of the nr database (blastx using BLOSUM45; E > 1) were subsequently aligned to the honey bee genome (build Amel 4.0). Of these, 216 ant transcripts had strong similarity to honey bee sequences (tblastx using BLOSUM45; E ≤ 1e-10). These 216 sequences were compared against all non-honey bee sequences of the EMBL Nucleotide Sequence Database (release 88, September 2006). We retained the 148 ant transcripts that showed strong similarity to honey bee build 4.0 (E ≤ 1e-10) and no or very weak similarity (E > 1) to known non-hymenopteran sequences (tblastx using BLOSUM45). When multiple tblastx alignment frames were possible, the positive strand frame with the strongest E-value was retained. The 10,000 bp honey bee genomic region surrounding each ant-bee sequence pair was then compared against the nr protein database via blastx. For 31 ant transcripts, the corresponding honey bee genomic region either did not show similarity to known genes, or only showed similarity to genes transcribed in the opposite direction. InterProScan was used to scan for protein signatures <span class="info-text">[55]</span>. Additionally, the ant transcripts were aligned via tblastx against build 2.0 of the honey bee genome, which is currently the bee genome version with the most extensive annotation. With these results a GFF annotation file was generated and uploaded to BeeBase <span class="info-text">[56]</span> for visual examination of all ant transcript-honey bee genome homolog pairs. Based on the existence and orientation of surrounding predicted genes we then determined a confidence level for each ant-bee pair. We assigned three stars when an ant transcript overlapped with a previously known bee gene (*ab initio* prediction or EST evidence); two stars if there was no known bee gene close by; one star if a gene from another organism appeared to hit within 5,000 bp of the ant-bee pair. In addition, 8 ant-bee pairs considered as false positives were eliminated, leaving us with 23 candidate Hymenoptera-specific genes. BeeBase was used to generate <span class="info-text">Additional data file 5</span> and a preliminary version of <span class="info-text">Figure 2</span>, which was subsequently reformatted and modified to contain only relevant data: redundant text was removed, non-empty tracks were collapsed and empty tracks were deleted.

#### Microarray construction

Bacteria clones were inoculated into PCR plates containing 5 μl modified LB-ampicillin broth (0.2 × LB without NaCl) and grown overnight. Plasmid inserts were amplified by PCR after adding 95 μl of PCR mix. A single primer, SMART PCR primer 5'-AAGCAGTGGTAACAACGCAGAGT-3', which matches both the 3' and 5' SMART adaptor of the inserts, was used. PCR mixes contained 0.4 μl 5 U/μl TAQ (Qiagen, Hilden, Germany), 10 μl 10 × Qiagen buffer, 20 μl Q solution, 4 μl 25 mM MgCl2, 1.5 μl 25 mM dNTPs, and 1 μl 100 μM SMART PCR primer. An initial 9 minute denaturation at 94°C was followed by 40 cycles of 30 s at 94°C, 30 s at 59°C, and 3 minutes at 72°C. The reaction ended with an additional incubation of 7 minutes at 72°C. PCR products (2 μl of each) were analyzed on a 1% agarose gel. Gel pictures were visually examined to classify all PCR products as follows: 'strong single band' (78.4%); 'no band' (3.9%); or 'weak or multiple bands' (17.5%). These data were used to create an Excel file (<span class="info-text">Additional data file 8</span>), which will allow microarray users to exclude data from non-single-band spots. We preferred this solution to printing only single-band PCR products, as this would have involved an error-prone rearraying step.

PCR products were purified by a standard NaOAc/ethanol precipitation, resuspended in 30 μl water and transferred into duplicate 384-well plates using a Biomek FX liquid-handling robot (Beckman Coulter, Fullerton, CA, USA). Then PCR products were dried and resuspended in 20 μl 3 × SSC, 1.5 M betaine. This spotting buffer improves spot homogeneity and signal-to-noise ratio <span class="info-text">[57]</span>. We also resuspended 48 times 10 commercial exogenous controls (SpotReport Alien cDNA Array Validation System, Stratagene, La Jolla, CA, USA) in 3 × SSC, 1.5 M betaine, 1 set for each subgrid of the microarray. Microarrays were printed on aldehydesilane-coated slides (NexterionTM Slide AL, Schott Nexterion, Jena, Germany), using an OmniGrid 300 spotting robot (GeneMachines, San Carlos, CA, USA). Spot and printing quality were assessed visually under a dissecting microscope after printing. While a few slides had minor defects (for example, a few spots missing or damaged by dust particles), the majority of slides exhibited no defects. DNA was crosslinked to slides by baking at 80°C for 1 h. Afterwards, the slides were post-processed with NaBH4 using the manufacturer's recommended protocol.

#### Clone tracking

To detect major mistakes (for example, inverted or rotated plates) made during sequencing, amplification and/or transfer into 384-well plates, we resampled and sequenced 534 PCR products from the 384-well plates. These samples were chosen so that they represented 2 to 4 samples of each 96-well plate. For all 96-well plates we also manually checked that PCR length patterns corresponded roughly to sequence length patterns. Using these 2 quality control methods, we identified 8 96-well plates that had been sequenced upside-down. After careful verification involving more sequencing, we corrected these mistakes by renaming the sequences correctly. At that point only 6 control sequences (1.1%) did not match the expected sequence, suggesting that these were sporadic contaminations.

#### Availability of sequence data, cDNA clones and microarrays

The ESTs described in this paper were submitted to the GenBank data library under accession numbers EE127747 to EE149461. The assembled sequences can be downloaded from the Fourmidable database <span class="info-text">[54]</span>. The microarray data were submitted to Gene Expression Omnibus <span class="info-text">[58]</span> with accession number GSE5995. Fire ant cDNA clones and cDNA microarrays can be obtained according to instructions on Fourmidable <span class="info-text">[54]</span>.

<br />

## Additional data files
<hr />

The following additional data are available with the online version of this paper. <span class="info-text">Additional data file 1</span> lists honey bee sequences similar to fire ant assembled sequences with a non-honey bee best hit. <span class="info-text">Additional data file 2</span> lists all fire ant assembled transcripts with a significant blastn hit to the honey bee genome and no other blastx or blastn hit. <span class="info-text">Additional data file 3</span> shows the GO annotations for all assembled transcripts based on blastx searches. <span class="info-text">Additional data file 4</span> shows the GO annotations for all assembled transcripts based on Prosite searches. <span class="info-text">Additional data file 5</span> shows the honey bee genome regions surrounding the candidate Hymenoptera-specific genes listed in <span class="info-text">Table 3</span>. <span class="info-text">Additional data file 6</span> contains fire ant assembled sequences similar to *D. melanogaster* genes with the GO term 'behavior'. <span class="info-text">Additional data file 7</span> contains an annotated list of the most abundant transcripts. <span class="info-text">Additional data file 8</span> shows the PCR results for the cDNA clones deposited onto the microarray. <span class="info-text">Additional data file 9</span> shows which fire ant assembled sequences had at least one cDNA clone with a good (single-band) PCR product. <span class="info-text">Additional data file 10</span> gives details on the microarray analyses performed. <span class="info-text">Additional data file 11</span> lists the fire ant clones that are differentially expressed between adults and brood based on a 4-fold cutoff. <span class="info-text">Additional data file 12</span> lists the fire ant clones that are differentially expressed between adults and brood based on a *t*-test (p < 0.001).

<br />

## References
<hr />

1. Hölldobler B, Wilson EO: The Ants. 1990, Berlin: Springer-Verlag

2. Bourke AFG, Franks NR: Social Evolution in Ants. 1995, Princeton: Princeton University Press

3. Robinson GE: Integrative animal behaviour and sociogenomics. *Trends Ecol Evol.* 1999, **14**: 202-205. 10.1016/S0169-5347(98)01536-5.

4. Robinson GE, Grozinger CM, Whitfield CW: Sociogenomics: social life in molecular terms. *Nat Rev Genet.* 2005, **6**: 257-270. 10.1038/nrg1575.

5. Haisheng Tian , Bradlieg Vinson S, Coates CJ: Differential gene expression between alate and dealate queens in the red imported fire ant, Solenopsis invicta Buren (Hymenoptera : Formicidae). *Insect Biochem Mol Biol.* 2004, **34**: 937-949. 10.1016/j.ibmb.2004.06.004.

6. Goodisman MA, Isoe J, Wheeler DE, Wells MA: Evolution of insect metamorphosis: A microarray-based study of larval and adult gene expression in the ant Camponotus festinatus. *Evolution*. 2005, **59**: 858-870. 10.1554/04-514.

7. De Risi JL, Iyer VR, Brown PO: Exploring the metabolic and genetic control of gene expression on a genomic scale. *Science*. 1997, **278**: 680-686. 10.1126/science.278.5338.680.

8. Schena M, Shalon D, Davis RW, Brown PO: Quantitative monitoring of gene-expression patterns with a complementary-DNA microarray. *Science*. 1995, **270**: 467-470. 10.1126/science.270.5235.467.

9. Williams DF, Oi DH, Porter SD, Pereira RM, Briano JA: Biological control of imported fire ants (Hymenoptera: Formicidae). *Am Entomol.* 2003, **49**: 150-163.

10. Taber SW: Fire Ants. 2000, College Station: Texas A&M University Press

11. Tschinkel WR: The Fire Ants. 2006, Cambridge: Harvard University Press

12. Vargo EL: Mutual pheromonal inhibition among queens in polygyne colonies of the fire ant Solenopsis invicta. *Behav Ecol Sociobiol.* 1992, **31**: 205-210. 10.1007/BF00168648.

13. Bernasconi G, Krieger MJB, Keller L: Unequal partitioning of reproduction and investment between cooperating queens in the fire ant, Solenopsis invicta, as revealed by microsatellites. *Proc R Soc B.* 1997, **264**: 1331-1336. 10.1098/rspb.1997.0184.

14. Vargo EL: Sex investment ratios in monogyne and polygyne populations of the fire ant Solenopsis invicta. *J Evol Biol.* 1996, **9**: 783-802. 10.1046/j.1420-9101.1996.9060783.x.

15. Passera L, Aron S, Vargo EL, Keller L: Queen control of sex ratio in fire ants. *Science*. 2001, **293**: 1308-1310. 10.1126/science.1062076.

16. De Heer CJ, Ross KG: Lack of detectable nepotism in multiple-queen colonies of the fire ant Solenopsis invicta (Hymenoptera: Formicidae). *Behav Ecol Sociobiol.* 1997, **40**: 27-33. 10.1007/s002650050312.

17. Fletcher DJC, Blum MS: Pheromonal control of dealation and oogenesis in virgin queen fire ants. *Science*. 1981, **212**: 73-75. 10.1126/science.212.4490.73.

18. Klobuchar EA, Deslippe RJ: A queen pheromone induces workers to kill sexual larvae in colonies of the red imported fire ant (Solenopsis invicta). *Naturwissenschaften*. 2002, **89**: 302-304. 10.1007/s00114-002-0331-1.

19. Ross KG, Vargo EL, Keller L: Social evolution in a new environment: the case of introduced fire ants. *Proc Natl Acad Sci USA*. 1996, **93**: 3021-3025. 10.1073/pnas.93.7.3021.

20. Ross KG, Keller L: Genetic control of social organization in an ant. *Proc Natl Acad Sci USA*. 1998, **95**: 14232-14237. 10.1073/pnas.95.24.14232.

21. Krieger MJ: To b or not to b: a pheromone-binding protein regulates colony social organization in fire ants. *Bioessays*. 2005, **27**: 91-99. 10.1002/bies.20129.

22. Keller L, Ross KG: Selfish genes: a green beard in the red fire ant. *Nature*. 1998, **394**: 573-575. 10.1038/29064.

23. Tatusov RL, Fedorova ND, Jackson JD, Jacobs AR, Kiryutin B, Koonin EV, Krylov DM, Mazumder R, Mekhedov SL, Nikolskaya AN, et al: The COG database: an updated version includes eukaryotes. *BMC Bioinformatics*. 2003, **4**: 41-10.1186/1471-2105-4-41.

24. Claverie JM: Fewer genes, more noncoding RNA. *Science*. 2005, **309**: 1529-1530. 10.1126/science.1116800.

25. Mattick JS: The functional genomics of noncoding RNA. *Science*. 2005, **309**: 1527-1528. 10.1126/science.1117806.

26. Cheng J, Kapranov P, Drenkow J, Dike S, Brubaker S, Patel S, Long J, Stern D, Tammana H, Helt G, et al: Transcriptional maps of 10 human chromosomes at 5-nucleotide resolution. *Science*. 2005, **308**: 1149-1154. 10.1126/science.1108625.

27. Whitfield CW, Band MR, Bonaldo MF, Kumar CG, Liu L, Pardinas JR, Robertson HM, Soares MB, Robinson GE: Annotated expressed sequence tags and cDNA microarrays for studies of brain and behavior in the honey bee. *Genome Res.* 2002, **12**: 555-566. 10.1101/gr.5302.

28. Valles SM, Strong CA, Dang PM, Hunter WB, Pereira RM, Oi DH, Shapiro AM, Williams DF: A picorna-like virus from the red imported fire ant, Solenopsis invicta: initial discovery, genome sequence, and characterization. *Virology*. 2004, **328**: 151-157. 10.1016/j.virol.2004.07.016.

29. Valles SM, Strong CA: Solenopsis invicta virus-1A (SINV-1A): distinct species or genotype of SINV-1?. *J Invertebr Pathol.* 2005, **88**: 232-237. 10.1016/j.jip.2005.02.006.

30. Honeybee Genome Sequencing Consortium: Insights into social insects from the genome of the honeybee Apis mellifera. *Nature*. 2006, **443**: 931-949. 10.1038/nature05260.

31. Birney E, Andrews D, Caccamo M, Chen Y, Clarke L, Coates G, Cox T, Cunningham F, Curwen V, Cutts T, et al: Ensembl 2006. *Nucleic Acids Res.* 2006, **34**: D556-561. 10.1093/nar/gkj133.

32. Liu C, Bai B, Skogerbo G, Cai L, Deng W, Zhang Y, Bu D, Zhao Y, Chen R: NONCODE: an integrated knowledge database of non-coding RNAs. *Nucleic Acids Res.* 2005, **1** (33): D112-D115.

33. Griffiths-Jones S, Grocock RJ, van Dongen S, Bateman A, Enright AJ: miRBase: microRNA sequences, targets and gene nomenclature. *Nucleic Acids Res.* 2006, **34**: D140-D144. 10.1093/nar/gkj112.

34. Gene Ontology Consortium: The Gene Ontology (GO) project in 2006. *Nucleic Acids Res.* 2006, **34**: D322-D326. 10.1093/nar/gkj021.

35. Ashburner M, Ball CA, Blake JA, Botstein D, Butler H, Cherry JM, Davis AP, Dolinski K, Dwight SS, Eppig JT, et al: Gene ontology: tool for the unification of biology. The Gene Ontology Consortium. *Nat Genet.* 2000, **25**: 25-29. 10.1038/75556.

36. Cameron SA, Mardulyn P: Multiple molecular data sets suggest independent origins of highly eusocial behavior in bees (Hymenoptera : Apinae). *Syst Biol.* 2001, **50**: 194-214. 10.1080/10635150151125851.

37. Carpenter JM: Phylogenetic relationships and the origin of social behaviour in the Vespidae. The Social Biology of Wasps. Edited by: Ross KC, Matthews RW. 1991, Ithaca, NY: Cornell University Press, 7-32.

38. Fujiyuki T, Takeuchi H, Ono M, Ohka S, Sasaki T, Nomoto A, Kubo T: Novel insect picorna-like virus identified in the brains of aggressive worker honeybees. *J Virol.* 2004, **78**: 1093-1100. 10.1128/JVI.78.3.1093-1100.2004.

39. Varaldi J, Fouillet P, Ravallec M, Lopez-Ferber M, Bouletreau M, Fleury F: Infectious behavior in a parasitoid. *Science*. 2003, **302**: 1930-10.1126/science.1088798.

40. Parker JD, Parker KM, Sohal BH, Sohal RS, Keller L: Decreased expression of Cu-Zn superoxide dismutase 1 in ants with extreme lifespan. *Proc Natl Acad Sci USA*. 2004, **101**: 3486-3489. 10.1073/pnas.0400222101.

41. Jemielity S, Chapuisat M, Parker JD, Keller L: Long live the queen: studying aging in social insects. *AGE*. 2005, **27**: 241-248. 10.1007/s11357-005-2916-z.

42. Tschinkel WR: Fire ant queen longevity and age - estimation by sperm depletion. *Ann Entomol Soc Am*. 1987, **80**: 263-266.

43. Kenyon C: The plasticity of aging: Insights from long-lived mutants. *Cell*. 2005, **120**: 449-460. 10.1016/j.cell.2005.02.002.

44. Tatar M, Bartke A, Antebi A: The endocrine regulation of aging by insulin-like signals. *Science*. 2003, **299**: 1346-1351. 10.1126/science.1081447.

45. Jouvenaz DP, Allen GE, Banks WA, Wojcik DP: Survey for pathogens of fire ants, Solenopsis spp., (Hymenoptera-Formicidae) in the southeastern United States. *Florida Entomol.* 1977, **60**: 275-279. 10.2307/3493922.

46. Stapleton M, Carlson J, Brokstein P, Yu C, Champe M, George R, Guarin H, Kronmiller B, Pacleb J, Park S, et al: A Drosophila full-length cDNA resource. *Genome Biol.* 2002, **3**: RESEARCH0080-10.1186/gb-2002-3-12-research0080.

47. Ewing B, Hillier L, Wendl MC, Green P: Base-calling of automated sequencer traces using phred. I. Accuracy assessment. *Genome Res.* 1998, **8**: 175-185.

48. Ewing B, Green P: Base-calling of automated sequencer traces using phred. II. Error probabilities. *Genome Res.* 1998, **8**: 186-194.

49. Altschul SF, Madden TL, Schaffer AA, Zhang J, Zhang Z, Miller W, Lipman DJ: Gapped BLAST and PSI-BLAST: a new generation of protein database search programs. *Nucleic Acids Res.* 1997, **25**: 3389-3402. 10.1093/nar/25.17.3389.

50. Altschul SF, Gish W, Miller W, Myers EW, Lipman DJ: Basic Local Alignment Search Tool. *J Mol Biol.* 1990, **215**: 403-410.

51. Gattiker A, Gasteiger E, Bairoch A: ScanProsite: a reference implementation of a PROSITE scanning tool. *Appl Bioinformatics*. 2002, **1**: 107-108.

52. Gene Ontology. [http://www.geneontology.org/](//geneontology.org/){:target="_blank"}

53. Ye J, Fang L, Zheng H, Zhang Y, Chen J, Zhang Z, Wang J, Li S, Li R, Bolund L, et al: WEGO: a web tool for plotting GO annotations. *Nucleic Acids Res.* 2006, **34**: W293-W297. 10.1093/nar/gkl031.

54. Fourmidable Ant Sequence Database.

55. Zdobnov EM, Apweiler R: InterProScan - an integration platform for the signature-recognition methods in InterPro. *Bioinformatics*. 2001, **17**: 847-848. 10.1093/bioinformatics/17.9.847.

56. BeeBase.

57. Diehl F, Grahlmann S, Beier M, Hoheisel JD: Manufacturing DNA microarrays of high spot homogeneity and reduced background signal. *Nucleic Acids Res.* 2001, **29**: E38-10.1093/nar/29.7.e38.

58. Gene Expression Omnibus. [https://www.ncbi.nlm.nih.gov/geo/](https://www.ncbi.nlm.nih.gov/geo/){:target="_blank"}

<br />

## Acknowledgements
<hr />

We thank M Robinson-Rechavi, G Robinson and three anonymous reviewers for critical reading of the manuscript; K Ross for ant colonies; L Falquet, P Sperisen and Vital-IT at the Swiss Institute of Bioinformatics for advice and access to bioinformatics resources; C LaMendola for help with ant sampling, RNA collections and microarray hybridizations; C Bernasconi for running PCR gels; A Patrignani and R Schlapbach at the Functional Genomics Center Zürich (FGCZ) for access to their liquid-handling robot. Special thanks to Keith Harshman, Johann Weber, Sophie Wicker, Manuel Bueno, and Jérôme Thomas at the Lausanne DNA Array Facility (DAFL) for microarray fabrication, advice and access to software. This research is supported by the AR and J Leenards Foundation (Lausanne), the Swiss National Science Foundation, the Rub Foundation, the Agassiz Foundation, the Herbette Foundation, the Chuard-Schmid Foundation and a grant from the rectorate of the University of Lausanne.

<br />

## Author information
<hr />

#### Authors and Affiliations

**Department of Ecology and Evolution, University of Lausanne, 1015, Lausanne, Switzerland**

John Wang, Stephanie Jemielity, Yannick Wurm & Laurent Keller

**Istituto di Ricerche di Biologia Molecolare, Merck Research Laboratories, 00040, Pomezia, Rome, Italy**

Paolo Uva

**Brain Research Institute, University of Zürich/Swiss Federal Institute of Technology, 8057, Zürich, Switzerland**

Johannes Gräff

#### Corresponding author

Correspondence to [John Wang](mailto:John.Wang@unil.ch).

<br />

## Additional information
<hr />

John Wang, Stephanie Jemielity contributed equally to this work.

<br />

## Electronic supplementary material
<hr />

- [13059_2006_1491_MOESM1_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM1_ESM.xls) <br />
**Additional data file 1**: Honey bee sequences similar to fire ant assembled sequences with a non-honey bee best hit (.XLS, 452 KB)

- [13059_2006_1491_MOESM2_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM2_ESM.xls) <br />
**Additional data file 2**: All fire ant assembled transcripts with a significant blastn hit to the honey bee genome and no other blastx or blastn hit (.XLS, 120 KB)

- [13059_2006_1491_MOESM3_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM3_ESM.xls) <br />
**Additional data file 3**: GO annotations for all assembled transcripts based on blastx searches (.XLS, 3 MB)

- [13059_2006_1491_MOESM4_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM4_ESM.xls) <br />
**Additional data file 4**: GO annotations for all assembled transcripts based on Prosite searches (.XLS, 266 KB)

- [13059_2006_1491_MOESM5_ESM.pdf](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM5_ESM.pdf){:target="_blank"} <br />
**Additional data file 5**: Honey bee genome regions surrounding the candidate Hymenoptera-specific genes listed in Table 3 (.PDF, 1 MB)

- [13059_2006_1491_MOESM6_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM6_ESM.xls) <br />
**Additional data file 6**: Fire ant assembled sequences similar to *D. melanogaster* genes with the GO term 'behavior' (.XLS, 27 KB)

- [13059_2006_1491_MOESM7_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM7_ESM.xls) <br />
**Additional data file 7**: Annotated list of the most abundant transcripts (.XLS, 27 KB)

- [13059_2006_1491_MOESM8_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM8_ESM.xls) <br />
**Additional data file 8**: PCR results for the cDNA clones deposited onto the microarray (.XLS, 1 MB)

- [13059_2006_1491_MOESM9_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM9_ESM.xls) <br />
**Additional data file 9**: Fire ant assembled sequences that had at least one cDNA clone with a good (single-band) PCR product (.XLS, 742 KB)


- [13059_2006_1491_MOESM10_ESM.pdf](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM10_ESM.pdf){:target="_blank"} <br />
**Additional data file 10**: Details on the microarray analyses performed (.PDF, 21 KB)

- [13059_2006_1491_MOESM11_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM11_ESM.xls) <br />
**Additional data file 11**: Fire ant clones that are differentially expressed between adults and brood based on a 4-fold cutoff (.XLS, 527 KB)

- [13059_2006_1491_MOESM12_ESM.xls](/publications/2007-fire-ant-gene-expression-microarrays/13059_2006_1491_MOESM12_ESM.xls) <br />
**Additional data file 12**: Fire ant clones that are differentially expressed between adults and brood based on a t-test (p < 0.001) (.XLS, 535 KB)

<br />

## Rights and permissions
<hr />

[Reprints and Permissions](https://s100.copyright.com/AppDispatchServlet?title=An%20annotated%20cDNA%20library%20and%20microarray%20for%20large-scale%20gene-expression%20studies%20in%20the%20ant%20Solenopsis%20invicta&author=John%20Wang%20et%20al&contentID=10.1186%2Fgb-2007-8-1-r9&copyright=Wang%20et%20al.%3B%20licensee%20BioMed%20Central%20Ltd.&publication=1474-760X&publicationDate=2007-01-15&publisherName=SpringerNature&orderBeanReset=true){:target="_blank"}

<br />

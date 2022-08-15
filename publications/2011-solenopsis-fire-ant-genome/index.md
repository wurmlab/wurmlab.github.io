---
title: 'The genome of the fire ant Solenopsis invicta'
layout: publication
permalink: /publications/solenopsis-fire-ant-genome/
---

<br />

<p class="info-text">Published: 31 January 2011</p>

# The genome of the fire ant *Solenopsis invicta*

<h5 class="info-text my-4">Y. Wurm, J. Wang, O. Riba-Grognuz, M. Corona, S. Nygaard, B. Hunt, K. Ingram, L. Falquet, M. Nipitwattanaphon, D. Gotzek, M. Dijkstra, J. Oettler, F. Comtesse, C. Shih, W. Wu, C. Yang, J. Thomas, E. Beaudoing, S. Pradervand, V. Flegel, E. Cook, R. Fabbretti, H. Stockinger, L. Long, W. Farmerie, J. Oakey, J. Boomsma, P. Pamilo, S. Yi, J. Heinze, M. Goodisman, L. Farinelli, K. Harshman, N. Hulo, L. Cerutti, I. Xenarios, D. Shoemaker, L. Keller</h5>

[*Proceedings of the National Academy of Sciences of the USA*](https://doi.org/10.1073/pnas.1009690108), 2011, 108:5679-84

<br />

## Abstract
<hr />

Ants have evolved very complex societies and are key ecosystem members. Some ants, such as the fire ant *Solenopsis invicta*, are also major pests. Here, we present a draft genome of *S. invicta*, assembled from Roche 454 and Illumina sequencing reads obtained from a focal haploid male and his brothers. We used comparative genomic methods to obtain insight into the unique features of the *S. invicta* genome. For example, we found that this genome harbors four adjacent copies of vitellogenin. A phylogenetic analysis revealed that an ancestral vitellogenin gene first underwent a duplication that was followed by possibly independent duplications of each of the daughter vitellogenins. The vitellogenin genes have undergone subfunctionalization with queen- and worker-specific expression, possibly reflecting differential selection acting on the queen and worker castes. Additionally, we identified more than 400 putative olfactory receptors of which at least 297 are intact. This represents the largest repertoire reported so far in insects. *S. invicta* also harbors an expansion of a specific family of lipid-processing genes, two putative orthologs to the *transformer/feminizer* sex differentiation gene, a functional DNA methylation system, and a single putative telomerase ortholog. EST data indicate that this S. invicta telomerase ortholog has at least four spliceforms that differ in their use of two sets of mutually exclusive exons. Some of these and other unique aspects of the fire ant genome are likely linked to the complex social behavior of this species.

<br />

<hr />

The major organizing principle of societies of bees, wasps, termites, and ants is a reproductive division of labor, whereby one or a few individuals (the queens and males) specialize in reproduction and the majority of individuals (the workers and soldiers) participate in cooperative tasks such as building the nest, collecting food, rearing the young, and defending the colony. This social organization provides numerous advantages and forms the basis for the tremendous ecological success of social insects. For example, they are found in almost every type of terrestrial environment, make up as much as 50% of animal biomass in some habitats, and play crucial roles as predators, pollinators, and soil processors (<span class="info-text">1</span>).
In addition to being critically important members of many terrestrial ecosystems, many ant species are also highly successful invasive pests. One such notorious invasive ant species is the fire ant, *Solenopsis invicta* (<span class="info-text">Fig. 1A</span>). This species was inadvertently introduced to the southern United States from South America in the 1930s (<span class="info-text">2, 3</span>). *S. invicta* is now of profound economic importance, with annual losses to households, businesses, governments, and institutions of $5,000 million across the United States (<span class="info-text">4</span>). For example, *S. invicta* aggressively uses its very potent sting, inflicting pain and inducing hypersensitivity reactions in humans (<span class="info-text">Fig. 1B</span>). Furthermore, it forms large colonies at high densities, is capable of damaging agricultural machinery, and thus interfering with crop production and harvesting (<span class="info-text">5, 6</span>). The many existing methods of fire ant control have failed to halt the spread of this exotic species and have hurt its indigenous competitors. There is thus an urgent need to develop effective and safe alternative management techniques (<span class="info-text">7</span>). Despite extensive quarantine and extermination efforts, *S. invicta* is now also found in many other countries including Australia, China, and Taiwan (<span class="info-text">8–10</span>).

<div class="publication-image mb-3">
  <h5><em>Fig. 1</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/depart-on-mating-flight.webp" />
    <img src="/img/publications/depart-on-mating-flight.jpg" width="1092" height="872" alt="S. invicta males depart on mating flight" />
  </picture>
  <p class="mt-2">
    <em>(<b>A</b>) S. invicta males (larger, with wings) depart on mating flight while workers (smaller, wingless) patrol (photo by Yannick Wurm). (<b>B</b>) A fire ant researcher was stung by his study subject (photo by Daniel P. Wojcik, US Department of Agriculture Agricultural Research Service).</em>
  </p>
</div>

The past decade has seen the development of several tools for studying ants at the molecular level (<span class="info-text">11, 12</span>). Although these tools have provided insights into the genetics of caste differentiation (<span class="info-text">13, 14</span>) and the effects of social context (<span class="info-text">15, 16</span>), they are somewhat limited, given that they survey only a small subset of the genome. We therefore undertook whole-genome sequencing and de novo assembly of the fire ant *S. invicta*.

<br />

## Results and Discussion
<hr />

#### Genome Assembly.

We report the draft sequence of the genome of the fire ant *S. invicta*, obtained by combined Roche 454 and Illumina technologies for a sequencing cost of approximately $230,000. Our assembly strategy was as follows: We first assembled only Illumina 352-bp insert paired-end reads (<span class="info-text">Table S1A</span>) and subsequently chopped up the resulting assembly into sequences equivalent to the length of Roche 454 reads. These artificial reads then were combined with Roche 454 shotgun-sequenced reads, resulting in 352.7 Mb of assembled data split among 90,231 contigs with an N50 size of 14,674 bp (N50 is the length such that 50% of the assembled sequence lies in blocks of length N50 or greater). Using 8- and 20-kb insert paired-end Roche 454 reads, 31,250 of the contigs were joined to form 10,543 scaffolds with an N50 size of 720,578 bp (<span class="info-text">Table 1</span> and <span class="info-text">Table S1F</span>). These scaffolds represent a total of 352.7 Mb of sequence including 41.3 Mb of undetermined “N” bases found within scaffolds between consecutive contigs. The remaining 58,981 contigs that could not be placed in scaffolds represent a total of 43.4 Mb of sequence and are significantly shorter than those that were placed in scaffolds (maximum size: 2,002 bp). Among these nonscaffolded contigs, 95% were clustered to each other by blastclust as having more than 50% sequence identity over half the sequence length or very significant similarity (blastn E < 10<sup>−30</sup>) to one or more genome scaffolds. These contigs likely are highly repetitive elements (<span class="info-text">Fig. S1</span>), consistent with the estimation that 23% of the *S. invicta* genome consists of highly repetitive or foldback elements (<span class="info-text">17</span>).

<div class="publication-image mb-3">
  <h5><em>Table 1 – <strong>Genome assembly statistics.</strong></em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/table-1-genome-assembly-statistics-s-invicta.webp" />
    <img src="/img/publications/table-1-genome-assembly-statistics-s-invicta.jpg" width="1092" height="512" alt="Genome assembly statistics" />
  </picture>
  <p class="mt-2">
    *Scaffolds include gaps between adjacent contigs. The estimated lengths of these gaps are included in scaffold size estimations. True sizes likely are slightly different.
  </p>
</div>

We assessed the accuracy and completeness of the *S. invicta* assembly by comparing it with an independently sequenced and assembled set of ESTs putatively representing 12,488 genes. Among these putative gene transcripts, 98.2% mapped to the genome assembly (blastn *E* < 10<sup>−50</sup>). A total of 580 putative transcripts contained two nonoverlapping 200-bp regions that mapped to two different scaffolded contigs. In the 383 cases in which exons from the same putative gene mapped to different contigs within the same scaffold, scaffolding of contigs was consistent with exon order and orientation. In the remaining 197 cases, putative exons mapped to contigs from different scaffolds. We manually inspected 50 of these to determine whether there was evidence for the scaffolds overlapping and whether the 8- and 20-kb insert libraries provided evidence for the scaffolds being adjacent. In 46 of the 50 cases, the scaffolds were probably either adjacent or the smaller scaffold filled a gap in the larger scaffold. Inconsistent mapping of the four remaining putative transcripts possibly reflected problems with EST assembly because three of the four transcripts had highly significant blast similarity to at least two normally unrelated genes. Overall, these results confirm that the genome assembly is essentially complete for gene content and that scaffolding is reliable.

Although the scaffolded *S. invicta* sequence represents 352.7 Mb, unresolved repeats bring the Roche 454 Newbler software estimated genome size to 484.2 Mb. This difference is likely due to the difficulty of resolving repeats. Three conflicting estimates of the haploid genome size of *S. invicta* have been reported previously: 591 Mb (0.62 pg) via reassociation kinetics (<span class="info-text">17</span>), 753.3 Mb via flow cytometry (<span class="info-text">18</span>), and 463 Mb via Feulgen image analysis densitometry (0.47 pg reported in ref. <span class="info-text">19</span>). The latter estimate is most consistent with our results. Discrepancies in genome size estimations have been previously reported (<span class="info-text">19, 20</span>). Such variation may be due to technical issues, differences in examined cell types, endoparasitic load, transposon activity, or possibly other genetic differences between individuals or populations.

#### Gene Content.

A combination of ab initio, EST-based, and sequence similarity-based methods generated an official gene set of 16,569 protein-coding genes. There were significant differences in the guanine-cytosine contents of exons (45.0%), introns (30.9%), the 2,000-bp surrounding genes (1,000 bp up- and downstream; 33.5%), and the genome in general (36.1%) (*t* tests, Bonferonni-corrected, all P values <10<sup>−10</sup>). These results are similar to those in the honey bee (<span class="info-text">21</span>). Blastp search of fire ant proteins against protein databases indicate that 47% of *S. invicta* genes have the strongest similarity to apoid sequences, and another 22% have the strongest similarity to *Nasonia* (<span class="info-text">Fig. 2</span>), which is consistent with ants being more closely related to bees than to chalcidoid wasps (<span class="info-text">23</span>). An additional 13% of *S. invicta* genes have the highest similarity to nonhymenopteran sequences, suggesting that they may be evolving slowly in *S. invicta* or have been lost in *Apis mellifera* and *Nasonia*. Finally, 18% of *S. invicta* proteins have no significant similarity (*E* > 10<sup>−5</sup>) to non-Solenopsis sequences in the GenBank nonredundant protein database (<span class="info-text">25</span>), suggesting that they may be fast-evolving or ant-specific. Similarly, 17% of the proteins in the *Nasonia vitripennis* official gene set have no significant similarity to non-*Nasonia* sequences in the nonredundant protein database.

<div class="publication-image mb-3">
  <h5><em>Fig. 2</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/taxonomic-distribution-of-best-blastp.webp" />
    <img src="/img/publications/taxonomic-distribution-of-best-blastp.jpg" width="1092" height="1538" alt="Taxonomic distribution of best blastp hits" />
  </picture>
  <p class="mt-2">
    <em>Taxonomic distribution of best blastp hits of S. invicta proteins to the nonredundant (nr) protein database (E < 10<sup>−5</sup>). Results were first plotted using MEGAN software (<span class="info-text">22</span>) and then branches with fewer than 20 hits were removed, branch lengths were reduced for compactness, and tree topology was adjusted to reflect consensus phylogenies (<span class="info-text">23, 24</span>).</em>
  </p>
</div>

#### Functional Categories.

*S. invicta* appears to harbor a typical insect gene repertoire. For example, the *S. invicta* genome includes a complete set of small RNA-processing genes with orthologs to *Argonaute*, *Drosha*, *Pasha*, *Dicer-1*, *Dicer-2*, *Loquacious*, and *R2D2*. Domain analyses of the *S. invicta*, *N. vitripennis*, *Drosophila melanogaster*, and *A. mellifera* proteomes reveal several putative gene duplications in fire ants (<span class="info-text">Dataset S1</span>). We highlight here the significance of these duplication events in vitellogenins, odor perception genes, and a family of lipid-processing genes. We also discuss additional features of interest in the fire ant genome relevant to the complex social biology of this species, including sex determination genes, DNA methylation genes, telomerase, and the insulin and juvenile hormone pathways.

#### Vitellogenins.

In contrast to other insects that mainly have only one or two vitellogenins, the fire ant genome harbors four adjacent copies of vitellogenin (*Vg1-4*) (<span class="info-text">Fig. 3A</span>), all of which are at least partially supported by EST reads. A phylogenetic analysis reveals that an ancestral vitellogenin gene first underwent duplication, followed by possibly independent duplications of each of the daughter vitellogenins, thus giving rise to *Vg1* and *Vg4* and to *Vg2* and *Vg3*. All of these duplications occurred after the ancestor of fire ants split from wasps and bees (<span class="info-text">Fig. 3B</span>). The single vitellogenin found in *A. mellifera* is a multifunctional protein (<span class="info-text">26</span>) involved in the regulation of life span (<span class="info-text">27, 28</span>) and division of labor (<span class="info-text">29</span>). Quantitative RT-PCR shows that *Vg1* and *Vg4* are preferentially expressed in workers and *Vg2* and *Vg3* in queens (<span class="info-text">Fig. 3C</span>, <span class="info-text">SI Materials and Methods</span>, and <span class="info-text">Table S1G</span>). Vitellogenin expression in *S. invicta* workers is surprising because they lack ovaries. Given the superorganism properties of ant societies, the expression patterns suggest that vitellogenins underwent neo- or subfunctionalization after duplication to acquire caste-specific functions.

<div class="publication-image mb-3">
  <h5><em>Fig. 3</em></h5>
  <picture>
    <source type="image/webp" srcset="/img/publications/s-invicta-vitellogenins.webp" />
    <img src="/img/publications/s-invicta-vitellogenins.jpg" width="1092" height="441" alt="S. invicta vitellogenins" />
  </picture>
  <p class="mt-2">
    <em>S. invicta vitellogenins. (<b>A</b>) Four vitellogenins are located within a single 40,000-bp region of the S. invicta genome. (<b>B</b>) Parsimony tree of known hymenopteran vitellogenin protein sequences suggests that two rounds of vitellogenin duplication occurred after the split between ants and other hymenopterans including bees and wasps. (<b>C</b>) Quantitative RT-PCR of the four putative S. invicta vitellogenins on whole bodies of major workers (W) and mated queens (Q) (n = 10). The y axis indicates mRNA concentrations for the different vitellogenins. Values depicted by each bar are shown below the x-axis labels. Error bars represent SEs. Expression differences between queens and workers were significant (Bonferroni-corrected two-tailed t tests: *P < 0.05, ***P < 10<sup>−10</sup>).</em>
  </p>
</div>

#### Odor Perception.

Consistent with studies in other insects, we find a single *S. invicta* ortholog to *DmOr83b*, a broadly expressed olfactory receptor (OR) required to interact with other ORs for *Drosophila* and *Tribolium castaneum* olfaction (<span class="info-text">30–32</span>). Beyond OR83b, OR number varies greatly between insect species. Blast searches and GeneWise searches using an HMM profile constructed with aligned ORs from *N. vitripennis* (<span class="info-text">33</span>) and *Pogonomyrmex barbatus* identified more than 400 loci in the *S. invicta* genome with significant sequence similarity to ORs. Preliminary work on gene model reconstruction identified 297 intact full-length proteins. Many *S. invicta* ORs are in tandem arrays (<span class="info-text">Fig. S2A</span>) and derive from recent expansions. *S. invicta* may thus harbor the largest identified insect OR repertoire because there are 10 ORs in *Pediculus humanus* (<span class="info-text">34</span>), 60 in *Drosophila*, 165 in *A. mellifera*, 225 in *N. vitripennis* (<span class="info-text">33</span>), and 259 in *T. castaneum* (<span class="info-text">32</span>). The large numbers of *N. vitripennis* and *T. castaneum* ORs are thought to be due to current or past difficulties in host and food finding. As has been suggested for *A. mellifera* (<span class="info-text">35</span>), the large number of *S. invicta* ORs may result from the importance of chemical communication in ants. The odorant-binding proteins (OBPs) are another family of genes also known to play roles in chemosensation in *Drosophila* (<span class="info-text">36</span>). Intriguingly, the social organization of *S. invicta* colonies is completely associated with sequence variation at the OBP gene *Gp-9* (<span class="info-text">37, 38</span>). We find 12 OBP domains in the *S. invicta* genome, 2 of which are differentially expressed between workers of alternate *Gp-9* genotypes (<span class="info-text">15</span>). Further analyses will be required to determine the extent to which these genes are directly involved in the morphological and behavioral differences between queens and workers of the two alternate social organizations of *S. invicta*.

#### Lipid Metabolism.

An unusually high number of genes in *S. invicta* have the following protein domains related to fatty-acid metabolism: Ketoacyl-synt (PF00109), Ketoacylsynt_C (PF02801), and Acyl_transf_1 (PF00698) (<span class="info-text">Dataset S1</span>). Although some are likely pseudogenes, nine *S. invicta* genes are complete and carry all three domains. In comparison, *A. mellifera* and *D. melanogaster* have only two such genes whereas *N. vitripennis* has six (respective odds ratios: 2.3, 3.4, and 0.8). The expansion of fatty-acid metabolism-related genes in *S. invicta* could stem from the fact that young *S. invicta* queens accumulate as much as 60% of their body mass in the form of lipids within the 2 weeks following eclosion from the pupae (<span class="info-text">39</span>) as a means of rearing a first worker brood for the duration of a claustral phase during which queens neither feed nor forage (<span class="info-text">40</span>). Alternatively, such lipid-processing genes may help produce the cuticular hydrocarbons that are involved in kin recognition in ants (<span class="info-text">41</span>).

#### Sex Determination.

Hymenopterans, including wasps, bees, and ants, have a haplo-diploid sex determination system whereby diploid eggs normally develop into females, and haploid eggs develop into males. In *N. vitripennis*, female development is initiated by maternally derived *transformer/feminizer* mRNA in the zygote (<span class="info-text">42</span>). In contrast, sex is determined by the complementary sex determiner (csd) gene in *A. mellifera* (<span class="info-text">43, 44</span>): Eggs that are heterozygous at this locus develop into females, whereas hemizygous haploids and homozygous diploids develop into males. The csd gene is thought to be a recent Apis innovation (<span class="info-text">43</span>), having arisen through a duplication of the *transformer/feminizer* gene. The sex determination mechanism in ants is unknown, but the occurrence of diploid males in some *S. invicta* populations suggests a csd-like mechanism (<span class="info-text">45, 46</span>). The genome of *S. invicta* contains two linked sequences with similarity to *transformer/feminizer* (<span class="info-text">Fig. S3A</span>), but unlike the *A. mellifera* sex-determining locus, the *S. invicta* genes are coded on opposite strands. Members of the Apis *transformer/feminizer* protein family contain two distinct domains: An N-terminal SDP_N domain and a C-terminal Apis_CSD domain. One of the *S. invicta* sequences (*Tra-A*) contains both domains (SDP_N: *E* = 3.5 × 10<sup>−11</sup>; Apis_CSD: *E* = 1.4 × 10<sup>−7</sup>). The other (*Tra-B*) contains a partial SDP_N domain (*E* = 9.5 × 10<sup>−4</sup>) and a nonsignificant match to Apis_CSD. Alternative splicing of *transformer/feminizer* mRNA is known to play a crucial role in sex determination for many insects (<span class="info-text">47</span>). Intriguingly, the *S. invicta* *Tra-B* transcript appears to have two different spliceforms, with only one spliceform including the SDP_N domain. This longer form appears to be the dominant transcript in males, whereas both forms are equally expressed in queens and workers (<span class="info-text">Fig. S3B</span>). A phylogenetic analysis of the *transformer/feminizer* homologs from several hymenopterans shows that the *S. invicta* sequences cluster together, consistent with independent *transformer/feminizer* duplication in the ant and honey bee lineages (<span class="info-text">Fig. S3C</span>).

#### Methylation.

*S. invicta* harbors a complete set of genes known to be involved in DNA methylation, maintenance of methylation patterns, and tRNA methylation in eukaryotes, including DNMT3, DNMT1, and TRDMT1 (previously known as DNMT2) (<span class="info-text">48</span>). A negative correlation between CpG<sub>O/E</sub>, a statistical measure of DNA methylation, and enrichment of sequence obtained after methylated DNA immunoprecipitation (MeDIP) from a pool of queen and worker prepupae suggested the existence of functional methylation in *S. invicta* (<span class="info-text">Table S1 B</span> and <span class="info-text">C</span>). DNA methylation was confirmed by sequencing of bisulfite-converted genomic DNA from nine genes (<span class="info-text">SI Materials and Methods</span>, <span class="info-text">Fig. S4</span>, <span class="info-text">Table S1D</span>). DNA methylation is hypothesized to play a key role in developmental responsiveness to environmental factors and may play an important role in social insect caste determination (<span class="info-text">49</span>). However, the primary targets of DNA methylation in insects appear to be genes with ubiquitous expression across tissues and alternate phenotypes (<span class="info-text">50–52</span>). Putatively methylated genes identified from MeDIP analysis in *S. invicta* were enriched for biological processes related to cellular metabolism and transcription (<span class="info-text">SI Materials and Methods</span>, <span class="info-text">Table S1E</span>), as is the case with methylated genes in *A. mellifera* (<span class="info-text">50</span>).

#### Telomerase Reverse Transcriptase.

Ants show remarkable intraspecific life-span variation with queens of some species living to the astonishing age of more than 20 y and workers typically dying within several months or at most a few years and males within a few months (<span class="info-text">53</span>). Aging is associated with a decline in telomere repair and consequent telomere shortening (<span class="info-text">54</span>) in many animals. Similarly, in the long-lived ant *Lasius niger* somatic tissues of the short-lived males have dramatically shorter telomeres than those of the much longer-lived queens and workers (<span class="info-text">55</span>). The telomere sequence of most ants and other insects is composed of TTAGG repeats (<span class="info-text">56, 57</span>). Consistent with this, the ends of *S. invicta* chromosomes showed strong hybridization signal to labeled (TTAGG)<sub>n</sub> probe (<span class="info-text">Fig. S5</span>). Furthermore, *S. invicta* sequences harbor many more degenerate TTAGG repeats than vertebrate-like TTAGGG repeats. Finally, in contrast with dipteran insect species that lack telomerase, but similarly to other nondipteran insect species whose genomes have been sequenced, *S. invicta* has a single putative telomerase ortholog with RNA-binding (TRBD) and reverse transcriptase (TERT) domains. Interestingly, EST data derived from mixed-stage, mixed-caste, whole-body libraries indicate that this *S. invicta* telomerase ortholog has at least four strongly supported spliceforms that differ in their use of two sets of mutually exclusive exons. These alternative spliceforms may permit fine-tuning of telomerase activity, perhaps in caste- or tissue-specific manners.

#### Insulin/Insulin-Like Growth Factor Signaling.

Insulin and insulin-like growth factor (IGF) signaling is a key integrative pathway regulating aging and fertility in animals (<span class="info-text">58, 59</span>). In *A. mellifera*, insulin and IGF signaling are involved in the regulation of caste determination (<span class="info-text">60, 61</span>), division of labor (<span class="info-text">62</span>), and queen longevity (<span class="info-text">28</span>) and may play similar roles in other social insects. The family of insulin-like peptides (ILPs) underwent many clade and species-specific duplications, leading to 37 members in *Caenorhabditis elegans*, 27 in *Bombyx mori*, and 7 in *Drosophila* and *Anopheles*. In contrast, *S. invicta* and *A. mellifera* have only two orthologous ILPs, one of which also occurs in *N. vitripennis* (<span class="info-text">Fig. S2B</span>). Both *S. invicta* and *A. mellifera* also have two insulin/IGF1 receptors. Phylogenetic analyses suggest that these two receptors resulted from an ancient duplication with subsequent losses in Diptera and *Nasonia*. Interestingly, we find that one of the putative insulin/IGF1 receptors belongs to our list of genes putatively subjected to dense methylation in *S. invicta* (<span class="info-text">SI Materials and Methods</span>).

#### Juvenile Hormone.

Juvenile Hormone (JH) regulates larval molting and reproductive development in many insects (<span class="info-text">63</span>). Increases in JH titer have also been shown to induce soldier-caste differentiation in termites (<span class="info-text">64</span>) and behavioral changes in *A. mellifera* workers (<span class="info-text">65, 66</span>). Interestingly, *S. invicta* harbors >30 putative juvenile hormone binding protein (JHBPs; PF06585, <span class="info-text">Dataset S1</span>) encoding genes, more than half of which are located in a single 600,000-bp region. By contrast, there are only 16 such JHBP domains in *Nasonia* and 19 in *A. mellifera*. Similarly, the number of genes that encode juvenile hormone epoxide hydrolases (JHEHs), enzymes that degrade JH, is much higher in *S. invicta* than in *A. mellifera* (one) and *Nasonia* (two). Four of the six *S. invicta* JHEH encoding genes are adjacent, suggesting recent duplications. Because JH titer determines fecundity of *S. invicta* queens (<span class="info-text">65</span>), the expansions of both JHBP and JHEH gene families in *S. invicta* may reflect strong selection occurring after the death of the mother queen with many nonreproductive queens competing to reproduce quickly and become “replacement” queens (<span class="info-text">40, 67</span>).

In conclusion, this study reveals that a combination of Roche 454 and Illumina sequencing can be used to obtain a good quality genome even when the genome is relatively large and contains a high proportion of repetitive elements. Comparison with other genomes shows that the fire ant genome has many unique properties probably associated with the complex social life of this species. Finally, the sequencing of the fire ant genome provides the foundation for future evolutionary, biomedical, sociogenetic, and pest-management studies of this important pest species and facilitates comparisons with other social species.

<br />

## Materials and Methods
<hr />

Computation was performed at the Vital-IT ([https://www.vital-it.ch](https://www.vital-it.ch/){:target="_blank"}) center for high-performance computing of the Swiss Institute of Bioinformatics. Analyses were assisted by custom Ruby/Bioruby (<span class="info-text">68, 69</span>), Perl (<span class="info-text">70</span>), and R (<span class="info-text">71</span>) scripts. The details of the sequencing, assembly, annotation, and analyses are given in <span class="info-text">SI Materials and Methods</span>.

<br />

## Supporting Information
<hr />

- [Supporting Information](/publications/2011-solenopsis-fire-ant-genome/pnas.201009690si.pdf){:target="_blank"} – (.PDF, 2.63 MB)

- [sd01.xls](/publications/2011-solenopsis-fire-ant-genome/sd01.xls) – (.XLS, 1.84 MB)

- [st01.doc](/publications/2011-solenopsis-fire-ant-genome/st01.doc) – (.DOC, 101.50 KB)

<br />

## References
<hr />

1. B Hölldobler, EO Wilson *The Ants* (The Belknap Press of Harvard University Press, Cambridge, MA, 1990).

2. DD Shoemaker, C DeHeer, MJB Krieger, KG Ross, Population genetics of the invasive fire ant Solenopsis invicta in the U.S.A. *Ann Entomol Soc Am* **99**, 1213–1233 (2006).

3. KG Ross, DD Shoemaker, Estimation of the number of founders of an invasive pest insect population: The fire ant Solenopsis invicta in the USA. *Proc Biol Sci* **275**, 2231–2240 (2008).

4. M McDonald, Reds under your feet. *New Sci* **189**, 50–51 (2006).

5. CF Lard, et al., An economic impact of imported fire ants in the United States of America. PhD thesis. (Texas A&M University, College Station, TX, 2006).

6. SB Vinson *Economic Impact and Control of Social Insects* (Praeger, New York, 1986).

7. DF Williams, RD deShazo, Biological control of fire ants: An update on new techniques. *Ann Allergy Asthma Immunol* **93**, 15–22 (2004).

8. MT Henshaw, N Kunzmann, C Vanderwoude, M Sanetra, RH Crozier, Population genetics and history of the introduced fire ant, Solenopsis invicta Buren (Hymenoptera: Formicidae), in Australia. *Aust J Entomol* **44**, 37–44 (2005).

9. CC Yang, DD Shoemaker, WJ Wu, CJ Shih, Population genetic structure of the red imported fire ant, Solenopsis invicta, in Taiwan. *Insectes Soc* **55**, 54–65 (2008).

10. Y-J Xu, J Huang, Y-Y Lu, L Zeng, G-W Liang, Observation of nuptial flights of the red imported fire ant, Solenopsis invicta (Hymenoptera: Formicidae) in mainland China. *Sociobiology* **54**, 831–840 (2009).

11. Y Wurm, et al., Fourmidable: A database for ant genomics. *BMC Genomics* **10**, 5 (2009).

12. J Wang, et al., An annotated cDNA library and microarray for large-scale gene-expression studies in the ant Solenopsis invicta. *Genome Biol* **8**, R9 (2007).

13. MA Goodisman, J Isoe, DE Wheeler, MA Wells, Evolution of insect metamorphosis: A microarray-based study of larval and adult gene expression in the ant Camponotus festinatus. *Evolution* **59**, 858–870 (2005).

14. J Gräff, S Jemielity, JD Parker, KM Parker, L Keller, Differential gene expression between adult queens and workers in the ant Lasius niger. *Mol Ecol* **16**, 675–683 (2007).

15. J Wang, KG Ross, L Keller, Genome-wide expression patterns and the genetic architecture of a fundamental social trait. *PLoS Genet* **4**, e1000127 (2008).

16. Y Wurm, J Wang, L Keller, Changes in reproductive roles are associated with changes in gene expression in fire ant queens. *Mol Ecol* **19**, 1200–1211 (2010).

17. J Li, KM Heinz, Genome complexity and organization in the red imported fire ant Solenopsis invicta Buren. *Genet Res* **75**, 129–135 (2000).

18. JS Johnston, LD Ross, L Beani, DP Hughes, J Kathirithamby, Tiny genomes and endoreduplication in Strepsiptera. *Insect Mol Biol* **13**, 581–585 (2004).

19. AM Ardila-Garcia, GJ Umphrey, TR Gregory, An expansion of the genome size dataset for the insect order Hymenoptera, with a first test of parasitism and eusociality as possible constraints. *Insect Mol Biol* **19**, 337–346 (2010).

20. ND Tsutsui, AV Suarez, JC Spagna, JS Johnston, The evolution of genome size in ants. *BMC Evol Biol* **8**, 64 (2008).

21. Insights into social insects from the genome of the honeybee Apis mellifera. *Nature* **443**, 931–949 (2006).

22. DH Huson, AF Auch, J Qi, SC Schuster, MEGAN analysis of metagenomic data. *Genome Res* **17**, 377–386 (2007).

23. MJ Sharkey, Phylogeny and classification of Hymenoptera. *Zootaxa* **1668**, 521–548 (2007).

24. BM Wiegmann, et al., Single-copy nuclear genes resolve the phylogeny of the holometabolous insects. *BMC Biol* **7**, 34 (2009).

25. KD Pruitt, T Tatusova, DR Maglott, NCBI Reference Sequence (RefSeq): A curated non-redundant sequence database of genomes, transcripts and proteins. *Nucleic Acids Res* **33**, D501–D504 (2005).

26. GV Amdam, K Norberg, A Hagen, SW Omholt, Social exploitation of vitellogenin. *Proc Natl Acad Sci USA* **100**, 1799–1802 (2003).

27. SC Seehuus, K Norberg, U Gimsa, T Krekling, GV Amdam, Reproductive protein protects functionally sterile honey bee workers from oxidative stress. *Proc Natl Acad Sci USA* **103**, 962–967 (2006).

28. M Corona, et al., Vitellogenin, juvenile hormone, insulin signaling, and queen honey bee longevity. *Proc Natl Acad Sci USA* **104**, 7128–7133 (2007).

29. CM Nelson, KE Ihle, MK Fondrk, RE Page, GV Amdam, The gene vitellogenin has multiple coordinating effects on social organization. *PLoS Biol* **5**, e62 (2007).

30. MC Larsson, et al., Or83b encodes a broadly expressed odorant receptor essential for Drosophila olfaction. *Neuron* **43**, 703–714 (2004).

31. R Benton, S Sachse, SW Michnick, LB Vosshall, Atypical membrane topology and heteromeric function of Drosophila odorant receptors in vivo. *PLoS Biol* **4**, e20 (2006).

32. P Engsontia, et al., The red flour beetle's large nose: An expanded odorant receptor gene family in Tribolium castaneum. *Insect Biochem Mol Biol* **38**, 387–397 (2008).

33. HM Robertson, J Gadau, KW Wanner, The insect chemoreceptor superfamily of the parasitoid jewel wasp *Nasonia* vitripennis. *Insect Mol Biol* **19**, 121–136 (2010).

34. EF Kirkness, et al., Genome sequences of the human body louse and its primary endosymbiont provide insights into the permanent parasitic lifestyle. *Proc Natl Acad Sci USA* **107**, 12168–12173 (2010).

35. HM Robertson, KW Wanner, The chemoreceptor superfamily in the honey bee, Apis mellifera: Expansion of the odorant, but not gustatory, receptor family. *Genome Res* **16**, 1395–1403 (2006).

36. P Xu, R Atkinson, DNM Jones, DP Smith, Drosophila OBP LUSH is required for activity of pheromone-sensitive neurons. *Neuron* **45**, 193–200 (2005).

37. KG Ross, L Keller, Genetic control of social organization in an ant. *Proc Natl Acad Sci USA* **95**, 14232–14237 (1998).

38. L Keller, KG Ross, Selfish genes: A green beard in the red fire ant. *Nature* **394**, 573–575 (1998).

39. L Keller, L Passera, Size and fat content of gynes in relation to the mode of colony founding in ants (Hymenoptera; Formicidae). *Oecologia* **80**, 236–240 (1989).

40. WR Tschinkel *The Fire Ants* (The Belknap Press of Harvard University Press, Cambridge, MA, 2006).

41. GJ Blomquist, AG Bagnères *Insect Hydrocarbons: Biology, Biochemistry, and Chemical Ecology* (Cambridge University Press, Cambridge, UK, 2010).

42. EC Verhulst, LW Beukeboom, L van de Zande, Maternal control of haplodiploid sex determination in the wasp Nasonia. *Science* **328**, 620–623 (2010).

43. M Hasselmann, et al., Evidence for the evolutionary nascence of a novel sex determination pathway in honeybees. *Nature* **454**, 519–522 (2008).

44. T Gempe, et al., Sex determination in honeybees: Two separate mechanisms induce and maintain the female pathway. *PLoS Biol* **7**, e1000222 (2009).

45. BM Glancey, MKS Romain, RH Crozier, Chromosome numbers of the red and black imported fire ants, Solenopsis invicta and S. richteri. *Ann Entomol Soc Am* **69**, 469–470 (1976).

46. KG Ross, DJC Fletcher, Genetic origin of male diploidy in the fire ant, Solenopsis invicta (Hymenoptera: Formicidae), and its evolutionary significance. *Evolution* **39**, 888–903 (1985).

47. EC Verhulst, L van de Zande, LW Beukeboom, Insect sex determination: It all evolves around transformer. *Curr Opin Genet Dev* **20**, 376–383 (2010).

48. TP Jurkowski, et al., Human DNMT2 methylates tRNA(Asp) molecules using a DNA methyltransferase-like catalytic mechanism. *RNA* **14**, 1663–1670 (2008).

49. R Kucharski, J Maleszka, S Foret, R Maleszka, Nutritional control of reproductive status in honeybees via DNA methylation. *Science* **319**, 1827–1830 (2008).

50. N Elango, BG Hunt, MAD Goodisman, SV Yi, DNA methylation is widespread and associated with differential gene expression in castes of the honeybee, Apis mellifera. *Proc Natl Acad Sci USA* **106**, 11206–11211 (2009).

51. S Foret, R Kucharski, Y Pittelkow, GA Lockett, R Maleszka, Epigenetic regulation of the honey bee transcriptome: Unravelling the nature of methylated genes. *BMC Genomics* **10**, 472 (2009).

52. BG Hunt, JA Brisson, SV Yi, MAD Goodisman, Functional conservation of DNA methylation in the pea aphid and the honeybee. *Genome Biol Evol* **2**, 719–728 (2010).

53. Keller, M Genoud, Extraordinary lifespans in ants: A test of evolutionary theories of ageing. *Nature* **389**, 958–960 (1997).

54. E Mariani, et al., Different rates of telomere shortening and telomerase activity reduction in CD8 T and CD16 NK lymphocytes with ageing. *Exp Gerontol* **38**, 653–659 (2003).

55. S Jemielity, et al., Short telomeres in short-lived males: What are the molecular and evolutionary causes? *Aging Cell* **6**, 225–233 (2007).

56. P Lorite, JA Carrillo, T Palomeque, Conservation of (TTAGG)(n) telomeric sequences among ants (Hymenoptera, Formicidae). *J Hered* **93**, 282–285 (2002).

57. R Frydrychová, P Grossmann, P Trubac, M Vítková, F Marec, Phylogenetic distribution of TTAGG telomeric repeats in insects. *Genome* **47**, 163–178 (2004).

58. CE Finch, G Ruvkun, The genetics of aging. *Annu Rev Genomics Hum Genet* **2**, 435–462 (2001).

59. A Dillin, DK Crawford, C Kenyon, Timing requirements for insulin/IGF-1 signaling in C. elegans. *Science* **298**, 830–834 (2002).

60. DE Wheeler, N Buck, JD Evans, Expression of insulin pathway genes during the period of caste determination in the honey bee, Apis mellifera. *Insect Mol Biol* **15**, 597–602 (2006).

61. SV de Azevedo, K Hartfelder, The insulin signaling pathway in honey bee (Apis mellifera) caste development: Differential expression of insulin-like peptides and insulin receptors in queen and worker larvae. *J Insect Physiol* **54**, 1064–1071 (2008).

62. SA Ament, M Corona, HS Pollock, GE Robinson, Insulin signaling is involved in the regulation of worker division of labor in honey bee colonies. *Proc Natl Acad Sci USA* **105**, 4226–4231 (2008).

63. LM Riddiford, Juvenile hormone action: A 2007 perspective. *J Insect Physiol* **54**, 895–901 (2008).

64. ME Scharf, CE Buckspan, TL Grzymala, X Zhou, Regulation of polyphenic caste differentiation in the termite Reticulitermes flavipes by interaction of intrinsic and extrinsic factors. *J Exp Biol* **210**, 4390–4398 (2007).

65. GE Robinson, EL Vargo, Juvenile hormone in adult eusocial Hymenoptera: Gonadotropin and behavioral pacemaker. *Arch Insect Biochem Physiol* **35**, 559–583 (1997).

66. JP Sullivan, SE Fahrbach, GE Robinson, GE Robinson, Juvenile hormone paces behavioral development in the adult worker honey bee. *Horm Behav* **37**, 1–14 (2000).

67. CS Brent, EL Vargo, Changes in juvenile hormone biosynthetic rate and whole body content in maturing virgin queens of Solenopsis invicta. *J Insect Physiol* **49**, 967–974 (2003).

68. J Aerts, A Law, An introduction to scripting in Ruby for biologists. *BMC Bioinformatics* **10**, 221 (2009).

69. N Goto, et al., BioRuby: Bioinformatics software for the Ruby programming language. *Bioinformatics* **26**, 2617–2619 (2010).

70. JE Stajich, et al., The Bioperl toolkit: Perl modules for the life sciences. *Genome Res* **12**, 1611–1618 (2002).

71. R Development Core Team *R: A Language and Environment for Statistical Computing* (R Foundation for Statistical Computing, Vienna, 2007).

<br />

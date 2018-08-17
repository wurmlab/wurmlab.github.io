# To run GV on the exemplar data


### Install GV

```bash
# Install GV
sh -c "$(curl -fsSL https://install-genevalidator.wurmlab.com)"

# RUN on genetic data
genevalidator -n 8 -o genetic_input -f genetic_query.fa

# Run on protein data
genevalidator -n 8 -o protein_input -f protein_query.fa
```

# Fauna Europaea
Thomas Pfuhl , November 2015


## Arbeitspakete

1. Distribution per country (present, absent, doubtful, no data) 
1. Literaturverweise
3. Experten (per taxon)  
4. vernacular names
5. taxonomische Hierarchy
6. Export csv


## map bounding box:
-33.75,31.052934,50.625,71.187754 exluding Spitzbergen  
-33.75,33.7243397779702,50.625,76.84081644345761 including Spitzbergen  
-54.931641,22.105998,87.626953,73.478485  

bounding box height is set in Drupal to "99%;" The trailing comma must be there.  
Reason: Drupal appends "px" to it, hence it produces the css statement width: "99%;px"  


## TABs : Distribution, Synonymy, Experts, Literature, Vernacular names
per jQuery

## hidden staff (display:none) 

        Back to search result
        Content
            Distribution

## taxon tree
Home » Administration » Configuration » CDM Dataportal  
Rank of highest displayed taxon:  **order**

## Distribution across countries 
    

vollständige Länderliste einmalig erzeugen und persistent abspeichern
spezies-abhängige Länderliste matchen gegen die vollständige Länderliste

     curl http://...

relevant database tables: definedtermbase, definedtermbase_continent, representation

    SELECT titleCache, idinvocabulary, iso3166_a2, orderindex  FROM `definedtermbase` WHERE DTYPE="Country" ORDER BY titleCache;

get Europe:  

    SELECT id, titleCache FROM `definedtermbase` WHERE DTYPE="NamedArea" AND titlecache="Europe";
returns:
    505, 1352

select all european countries:  

    SELECT titleCache, iso3166_a2, definedtermbase_continent . *
    FROM `definedtermbase`
    JOIN definedtermbase_continent ON definedtermbase.id = definedtermbase_continent.DefinedTermBase_id
    WHERE definedtermbase.DTYPE = "Country"
    AND definedtermbase_continent.continents_id = '505'
    ORDER BY definedtermbase_continent.continents_id, definedtermbase.titleCache;



## special remarks

changed "$" to string "jQuery" since we are using jQuery 1.4.4
we use dataTables 1.9.4 from cdm_dataportal





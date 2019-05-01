PHP=php
DOT=dot
FORMAT=png

DOTFLAGS=-T$(FORMAT)

RGDcore: RGDcore/RGDcore.php
	$(PHP) $^ > $@.dot
	$(DOT) $(DOTFLAGS) -o $@.$(FORMAT) $@.dot

.PHONY: clean

clean:
	rm *.dot
	rm *.$(FORMAT)

FILE:=specification-latest.yaml
PACKAGE_VERSION:=$(shell cat $(FILE) | grep version| tr -d 'version: [[:space:]]')


checkout:
	@echo "============ Checkout master branch ============"
	git checkout master && git pull

copy:
	@echo "============ Copy OpenApi specification from the service folder ============"
	cp ../public-gateway/api-doc.yaml ./specification-latest.yaml

release:
	@echo "============ Create release branch ============"
	git branch -m "release-v$(PACKAGE_VERSION)"

generate:
	@echo "============ Api generation ============"
	java -jar ./ops/openapi-generator-cli.jar generate -i specification-latest.yaml -g php -o . -c config.json

tag:
	@echo "============ Tag creation ============"
	git tag -a "v$(PACKAGE_VERSION)" -m "Release v$(PACKAGE_VERSION)"

build: copy checkout release generate
	@echo "============ Release building  ============"
	git add .
	git commit -m "Release v$(PACKAGE_VERSION)"

version: build tag
	@echo "============ Push version to origin ============"
	git push origin "release-v$(PACKAGE_VERSION)" --tags
	git checkout master